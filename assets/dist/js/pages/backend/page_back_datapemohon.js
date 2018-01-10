/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $(".select2").select2({ "placeholder": "Pilih.." });
    $('#data2_5, #data6_13, #data6_14').datepicker({ autoclose: true, todayHighlight: true, format: 'dd/mm/yyyy' });
    $('#dk1_6, #dk2_6, #dk3_6, #dk4_6').datepicker({ autoclose: true, todayHighlight: true, format: 'dd/mm/yyyy' });
    
    $('#reset-btn').click(resetForm);
    $('#data2, #data3, #data4').change(setKuota);
    
    // Toolbar extra buttons
    var btnFinish = $('<button style="display:none;" disabled></button>').text('Simpan')
                                     .addClass('btn btn-success')
                                     .on('click', function(){ alert('Finish Clicked'); });
    var btnCancel = $('<button></button>').text('Cancel')
                                     .addClass('btn btn-danger')
                                     .on('click', function(){ $('#smartwizard').smartWizard("reset"); });  
    $('#data_pemohon').smartWizard({
        selected: 0,
        theme: 'default',
        transitionEffect: 'fade',
        cycleSteps: false,
        showStepURLhash: false, // Show url hash based on step
        lang: { // Language variables for button
            next: 'Selanjutnya',
            previous: 'Sebelumnya'
        },
        toolbarSettings: {
            toolbarPosition: 'both',
            toolbarExtraButtons: [btnFinish]
        },
        anchorSettings: {
            anchorClickable: true, // Enable/Disable anchor navigation
            enableAllAnchors: true, // Activates all anchors clickable all times
            markDoneStep: true, // Add done css
            markAllPreviousStepsAsDone: false, // When a step selected by url hash, all previous steps are marked done
            removeDoneStepOnNavigateBack: false, // While navigate back done step after active step will be cleared
            enableAnchorOnDoneStep: true // Enable/Disable the done steps navigation
        }
    }).show();
    
    $("#data_pemohon").on("showStep", function (e, anchorObject, stepNumber, stepDirection, stepPosition) {
        //alert("You are on step "+stepNumber+" now");
        console.log("You are on step "+stepNumber+" now");
        
        if (stepPosition === 'first') {
            $("#prev-btn").addClass('disabled');
        } else if (stepPosition === 'final') {
            $("#next-btn").addClass('disabled');
        } else {
            $("#prev-btn").removeClass('disabled');
            $("#next-btn").removeClass('disabled');
        }
    });
    
    $("#next-btn").on("click", function () {
        console.log('come');
    });
});

var resetForm = function() {
    $('#kanim-form .form-group input').val('');
    $('#kanim-form .form-group select').val('');
    $("#kanim-form .select2").select2({ "placeholder": "Pilih.." });
    $('#kuota').html('&nbsp;');
};

var setKuota = function() {
    $('#kuota').html('&nbsp;');
    if($('#data2').val() !== '' && $('#data3').val() !== '' && $('#data4').val() !== '') {
        $('#kuota').html(getRandomInt(1, 200)+' / 200');
    }
};

var getRandomInt = function(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
};

var addPemohon = function() {
    resetFormPemohon();
    $('#pemohon-modal').modal('show');
};

var resetFormPemohon = function() {
    $('#pemohon-form .form-group input').val('');
    $('#pemohon-form .form-group select').val('');
    $("#pemohon-form .select2").select2({ "placeholder": "Pilih.." });
};