/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
//    setFormLogin();
    $(".select2").select2({ "placeholder": "Pilih.." });
    $('#reset-btn').click(resetForm);
});

var resetForm = function() {
    $('.form-group input').val('');
    $('.form-group select').val('');
    $(".select2").select2({ "placeholder": "Pilih.." });
    $('#data7').html('&nbsp;');
};

//function setFormLogin() {
//    $('form').submit(function(event) {
//        blockUI($('.login-box'));
//        event.preventDefault();
//        $('form').ajaxSubmit({
//            type: 'POST',
//            url: baseurl+'login/loginsite',
//            dataType: 'json',
//            beforeSubmit: function (formData, jqForm, options) {
//                if($('#uname').val() === '' || $('#pass').val() === '' || $('#captcha-txt').val() === ''){ 
//                    if($('#uname').val() === ''){ $('#alert').html(alertWarning('Username is empty !')); }
//                    else if($('#pass').val() === ''){ $('#alert').html(alertWarning('Password is empty !')); }
//                    else if($('#captcha-txt').val() === ''){ $('#alert').html(alertWarning('Captcha is empty !')); }
//                    unblockUI($('.login-box')); 
//                    return false; 
//                }
//                return true;
//            },
//            success: function (data) {
//                if(data.status === '0000') {
//                    window.location = baseurl+"dashboard";
//                } else if(data.status === '1111') {
//                    loadCaptcha();
//                    $('#captcha-txt').select().focus();
//                    $('#alert').html(alertWarning('Wrong Captcha.'));
//                } else if(data.status === '2222') {
//                    $('#alert').html(alertWarning('Invalid Username or Password.'));
//                } else if(data.status === '3333') {
//                    $('#alert').html(alertWarning('You don\'t have authorization to access this website.'));
//                } else if(data.status === '0101') {
//                    window.location = baseurl+"client/clientlist";
//                }
//                unblockUI($('.login-box'));
//            }
//        });
//    });
//}