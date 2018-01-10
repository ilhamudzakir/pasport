/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    setDataTable();
});

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
        "ordering": true,
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
        "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [6]
            }
        ],
        "aaSorting": [[0, 'asc']],
        "autoWidth": true
    });
    $('#tbl_wrapper').find('.dataTables_length select').addClass("form-control input-xsmall input-inline");
    $('#tbl_length select').select2(); // initialize select2 dropdown
};