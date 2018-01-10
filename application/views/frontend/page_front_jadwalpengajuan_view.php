<style type="text/css">
    .content-wrapper {
        background: url(<?php echo base_url('assets/dist/img/logo/bg_paspor.jpg'); ?>) center center no-repeat fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
    
    #bg-box {
        background-color: rgba(50, 50, 50, .6);
    }
    
    .content label {
        color: #fff;
        font-family: sans-serif;
        font-size: 11pt;
    }
    
    .fcalendar {
        background-color: #fff;
        padding: 0px 5px;
        border-radius: 5px;
    }
    
    #calendar h2 {
        font-family: sans-serif;
        font-size: 15pt;
    }
    
    #txt-header {
        color: #fff;
        font-size: 12pt;
        font-weight: bold;
        font-family: sans-serif;
        margin-bottom: 10px;
        border-bottom: 1px solid #fff;
    }
    
    .tresult table th, .tresult tbody td {
        color: #fff;
        padding: 10px;
    }
    .tresult tbody td {
        font-size: 12pt;
    }

    .box, .box-footer {
        background: none;
        color: white;
    }
    
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
    .param_kuota .tooltip{
        top: auto;
        left: auto;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header"></section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <form id="regis-form" role="form" method="post" enctype="multipart/form-data" action="Home/check_quota">
        <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url() ?>">
        <div id="param_provinsi" class="col-sm-3">
            <label for="provinsi">Pilih Provinsi</label>
            <select class="form-control select2" required id="reg_1" name="provinsi">
                                    <option value=""></option>
                                    <option selected value="7">DKI Jakarta</option>
                                </select>
        </div>
        <div id="param_kanim" class="col-sm-4">
            <label for="kanim">Pilih Kantor Imigrasi</label>
            <select class="form-control select2" id="reg_2" name="kanim">
                                    <option value=""></option>
                                     <?php foreach ($kanim as $key) { ?>
                                        <option <?php if($this->uri->segment(3)==$key->MO_ID){echo"selected";} ?> value="<?php echo $key->MO_ID ?>"><?php echo $key->MO_NAME ?></option>
                                    <?php } ?>
                                </select>
        </div>
        <div id="param_jmlh" class="col-sm-3">
            <label for="pengajuan">Jumlah Pengajuan</label>
            <select class="form-control select2" id="reg_3" name="jml">
                                    <option value=""></option>
                                    <?php for ($i=1; $i <=4 ; $i++) { ?>
                                        <option <?php if($this->uri->segment(4)==$i){echo"selected";} ?> value="<?php echo $i ?>"><?php echo $i ?> Orang Anggota Keluarga</option>
                                    <?php } ?> 
                                </select>
        </div>
        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
        <div class="col-sm-2">
            <button id="jadwal-search" class="btn bg-green" type="submit" style="margin-top: 26px;">Cari&nbsp; <i class="fa fa-search"></i></button>
        </div>
        </form>
    </div>
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-6">
            <div style="color: #fff;font-size: 11pt;font-family: sans-serif;margin-bottom: 5px;">Pilihlah hari sesuai waktu yang anda inginkan.</div>
            <div class="fcalendar">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
            </div>
            <!-- /. box -->
        </div>
        <div class="col-md-4">
            <div id="txt-header">Hasil Pencarian</div>
            <div class="tresult">
                <h3 style="color: #fff">Silahkan Pilih Tanggal Untuk Melihat Kuota</h3>
                <!-- <table style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="width: 25%;">Shift</th>
                            <th style="width: 25%;">Waktu</th>
                            <th style="width: 25%;" class="param_kuota">Kuota</th>
                            <th style="width: 25%;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pagi</td>
                            <td>09.00</td>
                            <td class="param_kuota">12/20</td>
                            <td class="text-center">
                                <a href="<?php echo BASE_URL; ?>daftar_pengajuan" class="btn btn-sm bg-green">Pilih</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Pagi</td>
                            <td>10.00</td>
                            <td class="param_kuota">08/20</td>
                            <td class="text-center">
                                <a href="<?php echo BASE_URL; ?>daftar_pengajuan" class="btn btn-sm bg-green">Pilih</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Pagi</td>
                            <td>11.00</td>
                            <td class="param_kuota">10/20</td>
                            <td class="text-center">
                                <a href="<?php echo BASE_URL; ?>daftar_pengajuan" class="btn btn-sm bg-green">Pilih</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Siang</td>
                            <td>16.00</td>
                            <td class="param_kuota">13/20</td>
                            <td class="text-center">
                                <a href="<?php echo BASE_URL; ?>daftar_pengajuan" class="btn btn-sm bg-green">Pilih</a>
                            </td>
                        </tr>
                    </tbody>
                </table> -->
            </div>
        </div>
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
<!-- Select2 -->
<script src="<?php echo BASE_URL; ?>assets/plugins/select2/select2.full.min.js"></script>
<!-- moment -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/moment.min.js"></script>
<!-- fullcalendar -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/fullcalendar/fullcalendar.print.css" media="print">
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- simpletip -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery.simpletip-1.3.1.min.js"></script>

<script src="<?php echo FRONTJS_URL; ?>page_front_jadwalpengajuan.js"></script>