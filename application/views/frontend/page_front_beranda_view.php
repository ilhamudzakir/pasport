<style type="text/css">
/*    .content-wrapper {
        background: url(<?php echo base_url('assets/dist/img/logo/paspor.jpg'); ?>) center center no-repeat fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }*/
    .content-wrapper {
        background-color: #006668;
    }
    
    #box-regis {
        background-color: rgba(30, 30, 30, .2);
        padding: 20px;
        text-align: justify;
    }
    
    #regis-form label {
        font-size: 11pt;
    }

    .box, .box-footer {
        background: none;
        color: white;
    }
</style>
<!-- Content Header (Page header) -->
<section class="content-header"></section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-sm-5">
            <div class="box box-solid">
                <div class="col-sm-12" style="font-family: sans-serif;">
                    <p class="text-center" style="font-size: 2em;">Aplikasi Permohonan Paspor Secara Online</p>
                    <!--<p class="text-center" style="font-size: 1.2em;">Pelayanan online kami akan mempermudah anda dalam pembuatan paspor</p>-->
                </div>
                <div class="col-sm-offset-2 col-sm-8">
                    <img src="<?php echo base_url('assets/dist/img/logo/paspor_sm.jpg'); ?>" style="width: 100%;margin-top: 10px;" />
                </div>
<!--                <div class="box-footer">
                    <a id="btn-regis" href="javascript:;" class="btn btn-warning" style="width: 100%;letter-spacing: 1px;font-family: sans-serif;"><b>DAFTAR SEKARANG</b></a>
                </div>-->
            </div>
        </div>
        <div class="col-sm-offset-2 col-sm-4">
            <div class="box box-solid">
                <div class="col-sm-12" style="font-family: sans-serif;margin-top: 4%;">
                    <p class="text-center" style="font-size: 1.8em;">Daftar Sekarang</p>
                    <div id="box-regis">
                        <p style="margin-bottom: 20px;">Silahkan temukan kantor imigrasi di daerah terdekat Anda.</p>
                        <form id="regis-form" role="form" method="post" enctype="multipart/form-data" action="Home/check_quota">
                            <div class="form-group">
                                <label for="reg_1">Nama Provinsi</label>
                                <select class="form-control select2" required id="reg_1" name="provinsi">
                                    <option value=""></option>
                                    <option selected value="7">DKI Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reg_2">Nama Kantor Imigrasi</label>
                                <select class="form-control select2" id="reg_2" name="kanim">
                                    <option value=""></option>
                                     <?php foreach ($kanim as $key) { ?>
                                        <option value="<?php echo $key->MO_ID ?>"><?php echo $key->MO_NAME ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="reg_3">Jumlah Pengajuan</label>
                                <select class="form-control select2" id="reg_3" name="jml">
                                    <option value=""></option>
                                     <?php for ($i=1; $i <=4 ; $i++) { ?>
                                        <option value="<?php echo $i ?>"><?php echo $i ?> Orang Anggota Keluarga</option>
                                    <?php } ?> 
                                </select>
                            </div>
                            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
                            <div class="form-group text-right" style="margin-top: 25px;margin-bottom: 0px;">
                                <button type="submit" class="btn bg-blue">Cari&nbsp; <i class="fa fa-search"></i></button>
                               
                                <!--<button id="reg-submit" class="btn bg-blue" type="button">Cari&nbsp; <i class="fa fa-search"></i></button>-->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.box -->
</section>
<!-- /.content -->
<div id="register-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" style="width: 350px;">
        <div class="modal-content">
            <div class="modal-header" style="padding: 5px 15px;">
                <h4>Form Registrasi</h4>
            </div>
            <div class="modal-body">
                <div id="alert-regis"></div>
                <form id="register-form" role="form" method="post">
                    <div class="form-group">
                        <label for="reg_1">Nama</label>
                        <input type="text" class="form-control" id="reg_1" name="reg_1" />
                    </div>
                    <div class="form-group">
                        <label for="reg_2">Nomor Induk Kependudukan (NIK)</label>
                        <input type="text" class="form-control" id="reg_2" name="reg_2" />
                    </div>
                    <div class="form-group">
                        <label for="reg_3">Email</label>
                        <input type="text" class="form-control" id="reg_3" name="reg_3" />
                    </div>
                    <div class="form-group">
                        <label for="reg_4">Nomor Handphone</label>
                        <input type="text" class="form-control" id="reg_4" name="reg_4" />
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="col-sm-12 text-center">
                    <!--<a href="<?php echo BASE_URL; ?>" class="btn bg-green">Submit</a>-->
                    <button id="reg-submit" class="btn bg-green" type="button">Submit</button>
                    <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- Select2 -->
<script src="<?php echo BASE_URL; ?>assets/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo FRONTJS_URL; ?>page_front_beranda.js"></script>