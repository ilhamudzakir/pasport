/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    setTimeArrive();
    $(".select2").select2({ "placeholder": "Pilih.." });
    $('#data_tgl').datepicker({ autoclose: true, todayHighlight: true, format: 'dd/mm/yyyy', startDate: '+1d' });
    setDataTable();
});

var setTimeArrive = function() {
    var optTime = '<option value=""></option>';
    for(var i = 6; i <= 17; i++) {
        var time = (i < 10 ? '0'+i : i);
        optTime += '<option value="'+ time +':00">'+ time +':00</option>';
    }
    $('#data_time').html(optTime).val('14:00').select2({ "placeholder": "Pilih.." });
};