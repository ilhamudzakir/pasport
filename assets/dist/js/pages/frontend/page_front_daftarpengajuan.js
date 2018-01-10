/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    setTimeArrive();
    $(".select2").select2({ "placeholder": "Pilih.." });
    $('#data_tgl').datepicker({ autoclose: true, todayHighlight: true, format: 'dd/mm/yyyy', startDate: '+1d' });
    setTooltip();
});

var setTooltip = function() {
    $('#param_jpengajuan').simpletip({fixed: true, position: 'bottom', content: $('#tooltip_jp').html()});
    $('.btn-lengkapi').simpletip({fixed: true, position: 'top', content: '<div>Mengisi seluruh data sesuai dengan peraturan imigrasi</div>'});
};

var setTimeArrive = function() {
    var optTime = '<option value=""></option>';
    for(var i = 6; i <= 17; i++) {
        var time = (i < 10 ? '0'+i : i);
        optTime += '<option value="'+ time +':00">'+ time +':00</option>';
    }
    $('#data_time').html(optTime).val('14:00').select2({ "placeholder": "Pilih.." });
};