/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
//    loadCaptcha();
//    $( "#load-captcha" ).click(function() { loadCaptcha(); });
//    setFormLogin();
//    $('#btn-regis').click(function(){
//        $('#alert-regis').empty(); $('#register-modal').modal('show');
//    });
//    $('#reg-submit').click(function(){
//        $('#alert-regis').html(alertSuccess('Link aktivasi dan password telah dikirim ke email Anda. Silahkan lakukan aktivasi untuk login.'));
//    });

    $(".select2").select2({ "placeholder": "Pilih.." });
    setCalendar();
    setTooltip();
});

var setTooltip = function() {
    $('#param_provinsi').simpletip({fixed: true, position: 'bottom', content: '<div>Memilih provinsi  sesuai dengan domisili anda</div>'});
    $('#param_kanim').simpletip({fixed: true, position: 'bottom', content: '<div>Memilih tempat pendaftaran kantor imigrai yang dekat dengan tempat tinggal anda</div>'});
    $('#param_jmlh').simpletip({fixed: true, position: 'bottom', content: '<div>Jumlah anggota anda yang ingin di daftarkan</div>'});
    $('.param_kuota').simpletip({fixed: true, position: 'bottom', content: '<div>Jumlah sisa kuota yang tersedia</div>'});
};

var setCalendar = function() {
    var date = new Date();
    var d = date.getDate(), m = date.getMonth()+1, y = date.getFullYear();
    var cDate = y+'-'+(m < 10 ? '0'+m : m)+'-'+(d < 10 ? '0'+d : d);
    console.log(cDate);
    var curDate = '', lastClickDate = '';
    
    $('#calendar').fullCalendar({
        header: {
            left: 'today',
            center: 'title',
            right: 'prev,next'
        },
        buttonText: {
            today: 'Hari Ini',
            month: 'Bulan',
            week: 'Minggu',
            day: 'Hari'
        },
        //Random default events
        events: [],
        monthNames: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','Nopember','Desember'],
        monthNamesShort: ['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nop','Des'],
        dayNames: ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
        dayNamesShort: ['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'],
        editable: true,
        droppable: true, // this allows things to be dropped onto the calendar !!!
        dayClick: function (date, jsEvent, view) {
            $('#result_tgl').html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px;color:#fff;"></i>');
            
            var tgl = date.format();
            if(tgl !== lastClickDate){ setDefaultCalBg(); }
            // set curdate
            if($(this).css('background-color') === 'rgb(252, 248, 227)') { curDate = tgl; }
            // change the day's background color just for fun
            if($(this).css('background-color') === 'rgba(0, 0, 0, 0)' || $(this).css('background-color') === 'rgb(252, 248, 227)') { 
                $(this).css('background-color', '#fcba49'); 
            }
            else if($(this).css('background-color') === 'rgb(252, 186, 73)' && tgl === curDate) { $(this).css('background-color', 'rgb(252, 248, 227)'); }
            else if($(this).css('background-color') === 'rgb(252, 186, 73)') { $(this).css('background-color', 'rgba(0, 0, 0, 0)'); }
            
            lastClickDate = tgl;
           $.ajax({
                type: "POST",
                data: {
                    kanim:$('#kanim').val(),
                    start_date:tgl,
                    jml:$('#jml').val(),
                } ,
                url: $('#base_url').val() +"Home/check_quota2",
                success: function(response) {
                    console.log("cekkkkkkkkkkkkk");
                    console.log(response);
                $('#result_tgl').html(response);
           },
           error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
           },
           dataType: "html",
          });
        }
    });
};

var setDefaultCalBg = function() {
    // set bg default
    $('.fc-day').css('background-color', 'rgba(0, 0, 0, 0)');
    $('.fc-bg .fc-today').css('background-color', 'rgb(252, 248, 227)');
};

function setFormLogin() {
    $('form').submit(function(event) {
        blockUI($('.login-box'));
        event.preventDefault();
        $('form').ajaxSubmit({
            type: 'POST',
            url: baseurl+'login/loginsite',
            dataType: 'json',
            beforeSubmit: function (formData, jqForm, options) {
                if($('#uname').val() === '' || $('#pass').val() === '' || $('#captcha-txt').val() === ''){ 
                    if($('#uname').val() === ''){ $('#alert').html(alertWarning('Username is empty !')); }
                    else if($('#pass').val() === ''){ $('#alert').html(alertWarning('Password is empty !')); }
                    else if($('#captcha-txt').val() === ''){ $('#alert').html(alertWarning('Captcha is empty !')); }
                    unblockUI($('.login-box')); 
                    return false; 
                }
                return true;
            },
            success: function (data) {
                if(data.status === '0000') {
                    window.location = baseurl+"dashboard";
                } else if(data.status === '1111') {
                    loadCaptcha();
                    $('#captcha-txt').select().focus();
                    $('#alert').html(alertWarning('Wrong Captcha.'));
                } else if(data.status === '2222') {
                    $('#alert').html(alertWarning('Invalid Username or Password.'));
                } else if(data.status === '3333') {
                    $('#alert').html(alertWarning('You don\'t have authorization to access this website.'));
                } else if(data.status === '0101') {
                    window.location = baseurl+"client/clientlist";
                }
                unblockUI($('.login-box'));
            }
        });
    });
}