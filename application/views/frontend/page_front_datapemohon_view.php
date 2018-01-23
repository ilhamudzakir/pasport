<div class="row" style="margin-bottom: 5px;">
    <div class="col-sm-12 text-center">
        <h3 style="font-family: sans-serif;color: #393939;"><?php echo $halaman; ?></h3>
    </div>
</div>
<div id="data_pemohon" style="background-color: #fff;font-family: sans-serif;display: none;margin-bottom: 10px;">
    <ul>
        <li id="data_diri" class="done" style="width: 25%">
            <a href="#step-1">
                <span style="font-size: 24pt;">1</span>
                <span style="font-size: 12pt;display: inline;margin-left: 15px;">Data Diri</span>
            </a>
        </li>
        <li id="data_keluarga" class="done" style="width: 25%">
            <a href="#step-2">
                <span style="font-size: 24pt;">2</span>
                <span style="font-size: 12pt;display: inline;margin-left: 15px;">Data Keluarga</span>
            </a>
        </li>
        <li class="done" style="width: 25%">
            <a href="#step-3">
                <span style="font-size: 24pt;">3</span>
                <span style="font-size: 12pt;display: inline;margin-left: 15px;">Upload Dokumen</span>
            </a>
        </li>
        <li class="done" style="width: 25%">
            <a href="#step-4">
                <span style="font-size: 24pt;">4</span>
                <span style="font-size: 12pt;display: inline;margin-left: 15px;">Verifikasi Permohonan</span>
            </a>
        </li>
    </ul>
    <div>
        <div id="step-1" class="">
            <?php $this->load->view('frontend/page_front_datapemohon_datadiri_view'); ?>
        </div>
        <div id="step-2" class="">
            <?php $this->load->view('frontend/page_front_datapemohon_datakeluarga_view'); ?>
        </div>
        <div id="step-3" class="">
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-12" style="margin: 10px 0px;font-size: 12pt;">
                    Silahkan upload hasil scan dari masing-masing dokumen dibawah ini.
                    <hr style="margin: 5px auto;" />
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" style="margin-top: 20px;" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>Home/insert_dokumen">
                        <input type="hidden" name="id" value="<?php echo $this->uri->segment(2) ?>">
                          <input type="hidden" id="idJadwal" name="idxxx" value="<?php echo $jadwal->id?>">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-4">Format file yang didukung adalah <strong class="text-danger">jpg, png, pdf</strong>.</div>
                            </div>
                            <div class="form-group">
                                <label for="ud_1" class="col-sm-3 control-label">Akta Kelahiran <span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_1" name="akta_kelahiran"  accept="image/png, image/jpeg,.pdf" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9" style="font-style: italic;margin-bottom: 5px;">Jika anda tidak memiliki Akta Kelahiran, silahkan upload data dibawah ini.</div>
                                <label for="ud_4" class="col-sm-3 control-label">Ijazah</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_4" name="izasah" accept="image/png, image/jpeg,.pdf" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ud_2" class="col-sm-3 control-label">KTP <span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_2" name="ktp"   accept="image/png, image/jpeg,.pdf" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ud_3" class="col-sm-3 control-label">Kartu Keluarga <span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_3" name="kk"  accept="image/png, image/jpeg,.pdf" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7" style="font-style: italic;margin-bottom: 5px;">Jika anda memiliki Paspor Lama, silahkan upload data dibawah ini.</div>
                                <label for="ud_5" class="col-sm-3 control-label">Paspor Lama</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_5" name="paspor_lama"  accept="image/png, image/jpeg,.pdf"/>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn9" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
        <div id="step-4" class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <div class="box box-default">
                    <div class="box-body" style="padding: 40px 0px;">
                        <div class="row">
                            <div class="col-lg-7">
                                <p class="text-center"> KEMENTRIAN HUKUM DAN HAK ASASI MANUSIA RI<br>DIREKTORAT JENDERAL IMIGRASI<br>JL.H.R.Rasuna Said Kav.8-9<br>Jakarta Selatan<br>Tel.(021)5208027 Fax.(021)5205029
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <p id="pemohon" class="text-center" style="border: 2px solid #333;"> Lembar Untuk: Pemohon</p>
                                <p class="text-left"> Dicetak tanggal: <?php echo date("Y/m/d"); ?></p>
                            </div>
                            <div class="col-lg-12">
                                <br><br>
                                <p class="text-center" style="margin-bottom: 0px;font-size: 18pt;font-weight: bold;"><?php   if(isset($data->nama)){ echo $data->nama; }?></p>
                                <p class="text-center" style="margin-bottom: 0px;font-size: 16pt;font-weight: bold;">   <?php foreach ($kanim as $key) { ?>
                                         <?php if(isset($data->id_kantor_imgirasi)){ if($data->id_kantor_imgirasi == $key->MO_ID ){ echo $key->MO_NAME; }else{"";}} ?>
                                    <?php } ?></p>
                                <p class="text-center" style="margin-bottom: 30px;font-size: 16pt;font-weight: bold;"><?php echo date("Y/m/d"); ?></p>
                            </div>
                        </div>
                        <!--<br>Tanggal Lahir<br>Jenis Permohonan<br>Harap Datang Ke<br><br><br>Tanggal Kedatangan<br>Jam-->
                        <!--<p class="text-left"> : SINGGIH AJI NUGROHO<br>: 26-10-1987<br>: 1A11 - 48H Perorangan Baru-Paspor Biasa<br>: Kanim Kelas I Khusus Jakarta Selatan<br>JL.warung Buncit Raya No.207,Jakarta Selatan<br>Jakarta, 12760<br>: rabu, 30-08-2017<br>: 08:00 - 10:00</p>-->
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3" style="font-weight: bold;">Nama</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6"><?php 
                            if(isset($data->nama)){
                            echo $data->nama; }?></div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3" style="font-weight: bold;">Tanggal Lahir</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6"><?php

                            if(isset($data->tanggal_lahir)){
                                     echo $data->tanggal_lahir;
                            }
                      
                    
                            ?></div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3" style="font-weight: bold;">Jenis Permohonan</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">
                                  <?php
                                        if(isset($data->id_jenis_paspor)){
                                                if($data->id_jenis_paspor == 1){
                                                    echo "9 Halaman ";
                                                }else if($data->id_jenis_paspor == 2){
                                                    echo "11 Halaman ";
                                                }else if($data->id_jenis_paspor == 3){
                                                   echo "24 Halaman ";
                                                }

                                            }
                                            ?>

                              <?php
                                        // debugCode($data);
                                            if(isset($data->id_jenis_pengajuan)){
                                                if($data->id_jenis_pengajuan == 1){
                                                    echo "Paspor Baru";
                                                }else if($data->id_jenis_pengajuan == 2){
                                                   echo "Pergantian Paspor";
                                                }

                                            }
                                        ?></div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3" style="font-weight: bold;">Kantor Imigrasi</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6"><?php foreach ($kanim as $key) { ?>
                                     <?php if(isset($data->id_kantor_imgirasi)){ if($data->id_kantor_imgirasi == $key->MO_ID ){ 
                                        echo $key->MO_NAME;}else{"";}} ?>
                                    <?php } ?>

                                </div>
                        </div>
                        <div class="row hide" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3" style="font-weight: bold;">Tanggal Kedatangan</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">28/09/2017</div>
                        </div>
                        <div class="row hide" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3" style="font-weight: bold;">Pukul</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">10:00</div>
                        </div>
                        <div class="row" style="margin: 40px 0px 20px 0px;">
                            <div class="col-lg-offset-1 col-lg-7">
                                <p class="text-left">Catatan:</p>
                                <p class="text-left">- Membawa dokumen persyaratan asli (Akta Kelahiran, KTP, Kartu Keluarga, Ijazah, Paspor Lama);</p>
                                <p class="text-left">- Pakaian sopan warna bebas selain putih (tidak boleh menggunakan pakaian putih karena background foto di TKP akan dikonsep putih);</p> 
                                <p class="text-left">- Untuk penggantian paspor, harap membawa KTP dan paspor lama;</p>
                                <p class="text-left">- Untuk pembuatan paspor baru, harap membawa dokumen Akta Kelahiran, KTP, Kartu Keluarga;</p>
                                <p class="text-left">- Membawa paspor asli bagi mereka yang melakukan penggantian karena habis masa berlaku (penggantian);</p> 
                                <p class="text-left">- Apabila pemohon tidak datang ke kantor Imigrasi, maka permohonan ini akan di batalkan secara otomatis oleh sistem SPRI;</p> 
                                <p class="text-left">- Tanda Terima Permohonan ini wajib dicetak dan dibawa saat kedatangan beserta bukti pembayaran dari bank (khusus kantor Imigrasi yang melakukanpembayaran via bank) dan harus datang sesuai dengan waktu yang telah ditentukan untuk mendapatkan nomor antrian;</p> 
                            </div>
                            <div class="col-lg-4 text-center">
                                <p>No Permohonan (Imigrasi): 1042000003531013</p>
                                <img src="<?php echo base_url('assets/dist/img/qr_code.jpg'); ?>" alt="barcode" style="width: 200px;height: 200px;margin: 0px auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
<div id="tooltip_jp" style="display: none;">
    <h4>Paspor Baru</h4>
    <p>Permohonan dokumen resmi yang diterbitkan oleh pejabat pemerintah yang berwenang tentang identitas seorang warga negara yang akan melakukan perjalanan lintas negara. Paspor ini digunakan ketika seorang warga negara yang hendak memasuki batas negara lain.</p>
    <h4 style="margin-top: 20px;">Pergantian Paspor</h4>
    <p>Pembaharuan dokumen resmi yang diterbitkan oleh pejabat pemerintah yang berwenang tentang identitas seorang warga negara yang akan melakukan perjalanan lintas negara. Paspor ini digunakan ketika seorang warga negara yang hendak memasuki batas negara lain.</p>
</div>

<style type="text/css">
    /* tooltip */
    .tooltip{
        position: absolute;
        top: 65px !important;
        left: 16px !important;
        z-index: 3;
        border: 1px #fff solid;
        text-align: justify;
        background-color: #fffdb5;
        opacity: 1;
        color: #000;
        padding: 5px 10px;
        font-family: sans-serif;
    }
    #param_jpengajuan .tooltip {
        width: 40%;
        left: 600px !important;
    }
    #param_pasporlama .tooltip {
        top: 184px !important;
        left: 600px !important;
    }
    #param_tempat .tooltip {
        top: 282px !important;
        left: 600px !important;
    }
    #param_nik1 .tooltip, #param_jabatan .tooltip {
        top: 86px !important;
        left: 650px !important;
    }
    #data_keluarga .tooltip {
        width: 245px;
    }
    #param_aktanikah .tooltip {
        top: 75px !important;
        left: 650px !important;
    }
    #param_nik2 .tooltip {
        top: 124px !important;
        left: 650px !important;
    }
</style>
<!-- Select2 -->
<script src="<?php echo BASE_URL; ?>assets/plugins/select2/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/datepicker/datepicker3.css">
<script src="<?php echo BASE_URL; ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- jQuery Smart Wizard -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/smart_wizard/smart_wizard.min.css">
<script src="<?php echo BASE_URL; ?>assets/plugins/smart_wizard/jquery.smartWizard.min.js"></script>
<!-- jQuery Validation -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/plugins/jquery.easyui.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL; ?>assets/dist/js/app.min.js"></script>
<!-- simpletip -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery.simpletip-1.3.1.min.js"></script>
<!-- simpletip -->
<script src="<?php echo FRONTJS_URL; ?>page_front_datapemohon.js"></script>


<script type="text/javascript">
   $(document).ready(function() {
        //set initial state.
        $("#param_pasporlama").hide();
        $("#jml_ank").hide();

          $("#user_negara2").val("adad");
       
        $('#jpengajuan').change(function() {
            // console.log($("#jpengajuan").val());
            if($(this).val() == 2){
                // console.log("asdasd");
                 $("#param_pasporlama").show();
              
            }else{
                // console.log("gfh");
                $("#param_pasporlama").hide();
            }
                  
        }); 

        $('#statusP').change(function() {
            // console.log($("#jpengajuan").val());
            if($(this).val() == 1){
                // console.log("asdasd");
                 $("#jml_ank").show();
              
            }else{
                // console.log("gfh");
                $("#jml_ank").hide();
            }
                  
        });


         $('#as_ktp').change(function() {
            if($(this).is(":checked")) {
                var alamat_1 = $('textarea#alamat_1').val();
                var kodepos_1 = $('#kodepos_1').val();
                
                var user_negara_t = $("#user_negara option:selected" ).text();
                var user_negara_id = $("#user_negara option:selected" ).val();
                console.log(kodepos_1);
                $("textarea#alamat_2").val(alamat_1);
                $("#kodepos_2").val(kodepos_1);
              // $("#user_negara2").val(user_negara_id);
                if ($('#user_negara2').find("option[value='" + user_negara_id + "']").length) {
                    $('#user_negara2').val(user_negara_id).trigger('change');
                } else { 
                    // Create a DOM Option and pre-select by default
                    var newOption = new Option(user_negara_t, user_negara_id, true, true);
                    // Append it to the select
                    $('#user_negara2').append(newOption).trigger('change');
                }  

                var user_province_t = $("#user_province option:selected" ).text();
                var user_province_id = $("#user_province option:selected" ).val();
                if ($('#user_province2').find("option[value='" + user_province_id + "']").length) {
                    $('#user_province2').val(user_province_id).trigger('change');
                } else { 
                    // Create a DOM Option and pre-select by default
                    var newOption = new Option(user_province_t, user_province_t, true, true);
                    // Append it to the select
                    $('#user_province2').append(newOption).trigger('change');
                } 

                var user_kota_t = $("#user_kota option:selected" ).text();
                var user_kota_id = $("#user_kota option:selected" ).val();
                if ($('#user_kota2').find("option[value='" + user_kota_id + "']").length) {
                    $('#user_kota2').val(user_kota_id).trigger('change');
                } else { 
                    // Create a DOM Option and pre-select by default
                    var newOption = new Option(user_kota_t, user_kota_t, true, true);
                    // Append it to the select
                    $('#user_kota2').append(newOption).trigger('change');
                } 

                var user_kecamatan_t = $("#user_kecamatan option:selected" ).text();
                var user_kecamatan_id = $("#user_kecamatan option:selected" ).val();
                if ($('#user_kecamatan2').find("option[value='" + user_kecamatan_id + "']").length) {
                    $('#user_kecamatan2').val(user_kecamatan_id).trigger('change');
                } else { 
                    // Create a DOM Option and pre-select by default
                    var newOption = new Option(user_kecamatan_t, user_kecamatan_t, true, true);
                    // Append it to the select
                    $('#user_kecamatan2').append(newOption).trigger('change');
                } 




            }else{
                console.log("masuk");
                $("textarea#alamat_2").val("");
                $("#kodepos_2").val("");
                $('#user_negara2').select2({
                    placeholder: "sdfsf",
                    allowClear: true
                });
            }
                  
        });
    });

    function comboCPC(id,target,url) {

        c = $(id);        
        urlCountry = "<?php echo site_url('"+url+"');?>";
        // console.log(urlCountry);
        var id = c.val();
        if(id){
         console.log(id);

           
            $.ajax({
              type: "POST",
              url: urlCountry+"/"+id,
                dataType:"json",
              success: function(json){
                $(target).find('option').remove();
                console.log(json);
                 $.each(json.rows, function(i, value) {
                    if (url =='ajax/getProvince') {
                        $(target).append($('<option>').text(value.title).attr('value', value.propinsi_id));
                    } else if (url == 'ajax/getCity') {
                        $(target).append($('<option>').text(value.title).attr('value', value.kabupaten_id));
                    } else if (url == 'ajax/getKecamatan'){
                        $(target).append($('<option>').text(value.title).attr('value', value.kecamatan_id));
                    }
                });
              }
            }); 
    }}

        
</script>