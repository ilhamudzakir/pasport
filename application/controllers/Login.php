<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        $this->validSession();
        $this->load->view('page_login_view');
    }
    
    public function generateCaptcha() {
        ob_start();
        ob_clean();
        header("Content-type: image/png");

        $this->load->helper('captcha_helper');
        $textCaptcha = randomCaptcha(5);
        $this->session->set_userdata('captcha', $textCaptcha);
        
        $font  = 5;
        $width  = imagefontwidth($font) * strlen($textCaptcha) + 1;
        $height = imagefontheight($font) + 1;

        $image = imagecreatetruecolor ($width,$height);
        imagesavealpha($image, true);
        $white = imagecolorallocatealpha ($image,0,0,0,127);
        $black = imagecolorallocatealpha ($image,0,0,0,1);
        imagefill($image,0,0,$white);

        imagestring ($image,$font,1,0,$textCaptcha,$black);

        imagepng ($image);
        imagedestroy($image);
    }
    
    public function loginSite() {
        $userMagang = "experd_intern";
        $passMagang = "intern2017";
        
        // authenticate
        $username = strtolower($this->input->post('uname', TRUE));
        $password = $this->input->post('pass', TRUE);
        $captcha = $this->input->post('captcha-txt', TRUE);
        
        $this->load->helper('curl_helper');
        // get token
        $fields = array(
            "referal" => urlencode("http://sales.experd.com")
        );
        $token = mycurlPost("https://manage.experd.com/api/get_token.php", $fields);
        
        if($username === $userMagang && $password === $passMagang) {
            $this->session->set_userdata('logged_in', TRUE);
            $this->session->set_userdata('user_id', '999999');
            $this->session->set_userdata('user_name', 'Experd Intern');
            if(strtolower($this->session->userdata('captcha')) === strtolower($captcha)) {
                $fields3 = array(
                    "referal" => urlencode("http://sales.experd.com"),
                    "token" => urlencode($token)
                );
                // get division
                $jdiv = mycurlPost("https://manage.experd.com/api/get_division.php", $fields3);
                // get employee
                $juser = mycurlPost("https://manage.experd.com/api/get_employee.php", $fields3);
                
                $this->session->set_userdata('list_user', $juser);
                $this->session->set_userdata('list_division', $jdiv);
                echo '{"status": "0101"}';
            } else {
                echo '{"status": "1111"}';
            }
        } else {
            
            // check user login
            $fields2 = array(
                "referal" => urlencode("http://sales.experd.com"),
                "token" => urlencode($token),
                "uname" => urlencode($username),
                "passwd" => urlencode($password)
            );
            $jturn = mycurlPost("https://manage.experd.com/api/check_login.php", $fields2);
            $result = json_decode($jturn);

            if($result == "") { 
                echo '{"status": "2222"}'; 
            } else if(strpos($result->div_initial, "SLS") === FALSE && strpos($result->div_initial, "DIR") === FALSE && strpos($result->div_initial, "IT") === FALSE && strpos($result->div_initial, "FIN") === FALSE && strpos($result->div_initial, "BOD") === FALSE){ // $result->emp_id != "53"
                echo '{"status": "3333"}';
            } else { 
                if(strtolower($this->session->userdata('captcha')) === strtolower($captcha)) {
                    $fields3 = array(
                        "referal" => urlencode("http://sales.experd.com"),
                        "token" => urlencode($token)
                    );
                    // get division
                    $jdiv = mycurlPost("https://manage.experd.com/api/get_division.php", $fields3);
                    // get employee
                    $juser = mycurlPost("https://manage.experd.com/api/get_employee.php", $fields3);
                    // set data user to session
                    $this->session->set_userdata('logged_in', TRUE);
                    $this->session->set_userdata('user_id', $result->user_id);
                    $this->session->set_userdata('user_name', $result->user_name);
                    $this->session->set_userdata('emp_id', $result->emp_id);
                    $this->session->set_userdata('emp_name', $result->emp_name);
                    $this->session->set_userdata('div_initial', str_replace("\"", " ", $result->div_initial));
                    $this->session->set_userdata('list_user', $juser);
                    $this->session->set_userdata('list_division', $jdiv);
                    // update login date
                    $this->load->model('login_model');
                    $this->login_model->updateLastLogin($result->emp_id, $result->emp_name);

                    echo '{"status": "0000"}'; 
                } else {
                    echo '{"status": "1111"}'; 
                }
            }
        }
    }

    public function logout() {
//        $this->session->unset_userdata();
        $this->session->sess_destroy();
        $this->session->set_userdata('logged_in', FALSE);
        redirect('/');
    }

    private function validSession() {
        if ($this->session->userdata('logged_in') != NULL && $this->session->userdata('logged_in') === TRUE) {
            redirect('/dashboard');
        }
    }

}
