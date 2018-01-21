<style type="text/css">
    table.dataTable thead > tr > th {
        padding: 10px !important;
    }
    /*tooltip*/
    .tooltip{
        position: absolute;
        top: 0px !important;
        left: 650px !important;
        z-index: 3;
        border: 1px #fff solid;
        text-align: justify;
        background-color: #fffdb5;
        opacity: 1;
        color: #000;
        padding: 5px 15px;
        width: 40%;
        font-family: sans-serif;
    }
    a .tooltip{
        top: -10px !important;
        left: 950px !important;
        width: 200px;
    }
</style>

<div class="row" style="margin-bottom: 5px;">
    <div class="col-sm-12 text-center">
        <h3 style="font-family: sans-serif;color: #393939;">Daftar Pengajuan</h3>
    </div>
</div>
<!-- Main content -->
<div class="box box-default">
    <div class="box-body">
        <div class="row" style="margin-top: 20px;">
            <div class="col-sm-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Kanim</label>
                        </div>
                        <div class="col-sm-9">
                          
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;<?php echo $kanim->MO_NAME?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Pengajuan</label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;<?php echo $jadwal->jumlah_pengajuan?> Orang Anggota Keluarga</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Tanggal</label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;"><?php echo $jadwal->tanggal?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;"><?php echo substr($jadwal->waktu, 0,2)?>: <?php echo substr($jadwal->waktu, 2,2)?></label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;09.00</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12" style="margin: 10px 0px;">
                <hr style="margin: 5px auto;" />
            </div>
            <div class="col-sm-12">
             
                <table id="tbl2" class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="vertical-align: middle;width: 25%;">Nama</th>
                            <th class="text-center" style="vertical-align: middle;">Status</th>
                            <th class="text-center" style="vertical-align: middle;">Jenis Pengajuan</th>
                            <th class="text-center" style="vertical-align: middle;">Jenis Paspor</th>
                            <th class="text-center" style="vertical-align: middle;">NIK</th>
                            <th class="text-center" style="vertical-align: middle;"></th>
                        </tr>
                    </thead>
                    <tbody>

                       <?php  $i=0; foreach ($daftar_pengajuan as $data) {
                           $i++
                       ?>
                       
                          <form  id="form<?php echo $i?>"   onsubmit="return validateForm(<?php echo $i?>)"  name="form<?php echo $i?>" action="<?php echo base_url() ?>Home/insertPengajuan/<?php echo $i?>" role="form" method="post" enctype="multipart/form-data">
                        <tr>
                            <td>
                                  <input name="idkanim"  type="hidden" value="<?php echo $kanim->MO_ID?>"/>
                                 <input type="hidden" class="form-control" id="data_1" name="id[<?php echo $i ?>]" value="<?php echo  $data->id?>"/>
                                  <input type="hidden" class="form-control" id="data_1" name="idu[<?php echo $i ?>]" value="<?php foreach ($data_diri as $user ) { ?><?php if($user->id_daftar_pengajuan == $data->id){ echo $user->id; }?> <?php } ?>"/>
                                <input type="text" class="form-control" id="data_1" name="nama[<?php echo $i ?>]" value="<?php foreach ($data_diri as $user){?><?php if($user->id_daftar_pengajuan == $data->id){ echo $user->nama; }?><?php }?>" required/>
                            
                            </td>
                            <td>
                                <select class="form-control select2" id="data_2" name="status[<?php echo $i ?>]" style="width: 100%;">
                                   


                                    <option value="suami" 
                                    <?php
                                    foreach ($data_diri as $user ) { 

                                        ?>

                                        <?php if($user->id_daftar_pengajuan == $data->id){
                                         
                                            if($user->status == "suami"){
                                                echo "selected";
                                            }

                                          }?> 
                                        <?php } ?>>Suami</option>
                                    <option value="istri"

                                    <?php
                                    foreach ($data_diri as $user ) { 

                                        ?>

                                        <?php if($user->id_daftar_pengajuan == $data->id){
                                         
                                            if($user->status == "istri"){
                                                echo "selected";
                                            }

                                          }?> 
                                        <?php } ?>>Istri</option>
                                    <option value="anak" 
                                    <?php
                                    foreach ($data_diri as $user ) { 

                                        ?>

                                        <?php if($user->id_daftar_pengajuan == $data->id){
                                         
                                            if($user->status == "anak"){
                                                echo "selected";
                                            }

                                          }?> 
                                        <?php } ?>>Anak</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control select2" id="jenis_pengajuan[<?php echo $i ?>]" name="jenis_pengajuan[<?php echo $i ?>]" style="width: 100%;">
                                   
                                    <option value="1"  <?php
                                    foreach ($data_diri as $user ) { 

                                        ?>

                                        <?php if($user->id_daftar_pengajuan == $data->id){
                                         
                                            if($user->id_jenis_pengajuan == '1'){
                                                echo "selected";
                                            }

                                          }?> 
                                        <?php } ?>>Paspor Baru</option>
                                    <option value="2"  <?php foreach ($data_diri as $user ) { 

                                        ?>

                                        <?php if($user->id_daftar_pengajuan == $data->id){
                                         
                                            if($user->id_jenis_pengajuan == '2'){
                                                echo "selected";
                                            }

                                          }?> 
                                        <?php } ?>>Pergantian Paspor</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control select2" id="jenis_paspor[<?php echo $i ?>]" name="jenis_paspor[<?php echo $i ?>]" style="width: 100%;">
                                   <?php foreach ($jenis_paspor as $value) {
                                      # code...
                                  ?>
                                    <option value="<?php echo $value->id?>" <?php  foreach ($data_diri as $user ) { 

                                        ?>

                                        <?php if($user->id_daftar_pengajuan == $data->id){
                                         
                                            if($user->id_jenis_paspor == $value->id){
                                                echo "selected";
                                            }

                                          }?> 
                                        <?php } ?>><?php echo $value->jenis_paspor?></option>
                                    <?php } ?>
                                   </select>
                            </td>
                            <td>
                                <input type="text" class="form-control" id="nik" name="nik[<?php echo $i ?>]" value="<?php foreach ($data_diri as $user ){ ?><?php if($user->id_daftar_pengajuan == $data->id){ echo $user->nik; }?><?php } ?>"  required/>
                            </td>
                            <td class="text-center">
                            
                            <BUTTON class="btn btn-sm btn-primary" style="padding: 3px 10px;" title="Lengkapi Data Diri Pemohon" type="submit"><i class="fa fa-files-o"></i>&nbsp; Lengkapi Data</BUTTON>
                            </td>
                        </tr>
                        </form>
                        <?php } ?>   
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.content -->
<div id="tooltip_jp" style="display: none;">
    <h4>Paspor Baru</h4>
    <p>Permohonan dokumen resmi yang diterbitkan oleh pejabat pemerintah yang berwenang tentang identitas seorang warga negara yang akan melakukan perjalanan lintas negara. Paspor ini digunakan ketika seorang warga negara yang hendak memasuki batas negara lain.</p>
    <h4 style="margin-top: 20px;">Pergantian Paspor</h4>
    <p>Pembaharuan dokumen resmi yang diterbitkan oleh pejabat pemerintah yang berwenang tentang identitas seorang warga negara yang akan melakukan perjalanan lintas negara. Paspor ini digunakan ketika seorang warga negara yang hendak memasuki batas negara lain.</p>
</div>
<!-- Select2 -->
<script src="<?php echo BASE_URL; ?>assets/plugins/select2/select2.full.min.js"></script>
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/datepicker/datepicker3.css">
<script src="<?php echo BASE_URL; ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- jQuery Validation -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/plugins/jquery.easyui.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL; ?>assets/dist/js/app.min.js"></script>
<!-- simpletip -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery.simpletip-1.3.1.min.js"></script>

<script src="<?php echo FRONTJS_URL; ?>page_front_daftarpengajuan.js"></script>


<script type="text/javascript">

function validateForm(i) {
    var x = document.forms["form"+i]["nama"+i].value;
     var y = document.forms["form"+i]["nik"+i].value;
    if (x == "" || y='') {
        alert("Name must be filled out");
        return false;
    }
}
</script>