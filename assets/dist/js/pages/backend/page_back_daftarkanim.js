/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $(".select2").select2({ "placeholder": "Pilih.." });
    $('#data_tgl').datepicker({ autoclose: true, todayHighlight: true, format: 'dd/mm/yyyy', startDate: '+1d' });
    setDataTable();
});

var pilihKanim = function(id) {
    setTimeArrive();
    $('#kanim-modal').modal('show');
};

var setTimeArrive = function() {
    var optTime = '<option value=""></option>';
    for(var i = 6; i <= 17; i++) {
        var time = (i < 10 ? '0'+i : i);
        optTime += '<option value="'+ time +':00">'+ time +':00</option>';
    }
    $('#data_time').html(optTime).val('14:00').select2({ "placeholder": "Pilih.." });
};

var setDataTable = function() {
    $('#tbl').DataTable({
        "aLengthMenu": [
            [5, 10, 20, -1],
            [5, 10, 20, "All"] // change per page values here
        ],
        "pageLength": 5,
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "bDestroy": true,
        "bRetrieve": true,
        "ordering": false,
        "info": true,
        "language": {
            "search": "Pencarian: ",
            "lengthMenu": "_MENU_ baris",
            "paginate": {
                "previous": "Prev",
                "next": "Next",
                "last": "Last",
                "first": "First"
            },
            "emptyTable": "Tidak ada data",
            "info": "hasil _START_ s.d _END_ dari _TOTAL_ baris",
            "infoEmpty": "",
            "infoFiltered": "(pencarian dari _MAX_ baris)",
            "zeroRecords": "Hasil pencarian tidak ditemukan"
        },
        "autoWidth": true
    });
    $('#tbl_wrapper').find('.dataTables_length select').addClass("form-control input-xsmall input-inline");
    $('#tbl_length select').select2(); // initialize select2 dropdown
};