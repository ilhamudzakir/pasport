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
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;Kanim Kelas 1 Khusus Jakarta Selatan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Pengajuan</label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;2 Orang Anggota Keluarga</label>
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
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;28/09/2017</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Waktu</label>
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
                            <th class="text-center" style="vertical-align: middle;" id="param_jpengajuan">Jenis Pengajuan</th>
                            <th class="text-center" style="vertical-align: middle;">Jenis Paspor</th>
                            <th class="text-center" style="vertical-align: middle;">Status Data</th>
                            <th class="text-center" style="vertical-align: middle;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="data_1" name="data_1" value="" />
                            </td>
                            <td>
                                <select class="form-control select2" id="data_2" name="data_2" style="width: 100%;">
                                    <option value=""></option>
                                    <option value="1" selected>Suami</option>
                                    <option value="2">Istri</option>
                                    <option value="3">Anak</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control select2" id="data_3" name="data_3" style="width: 100%;">
                                    <option value=""></option>
                                    <option value="1">Paspor Baru</option>
                                    <option value="2" selected>Pergantian Paspor</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control select2" id="data_4" name="data_4" style="width: 100%;">
                                    <option value=""></option>
                                    <option value="1">9 Halaman</option>
                                    <option value="2">12 Halaman</option>
                                    <option value="3" selected>24 Halaman</option>
                                </select>
                            </td>
                            <td class="text-center">
                                Perbarui Data
                            </td>
                            <td class="text-center">
                                <a href="<?php echo base_url('data_pemohon'); ?>" class="btn btn-sm btn-primary btn-lengkapi" style="padding: 3px 10px;" title="Lengkapi Data Diri Pemohon"><i class="fa fa-files-o"></i>&nbsp; Lengkapi Data</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="data_1" name="data_1" value="Putri Kirana" />
                            </td>
                            <td>
                                <select class="form-control select2" id="data_2" name="data_2" style="width: 100%;">
                                    <option value=""></option>
                                    <option value="1">Suami</option>
                                    <option value="2">Istri</option>
                                    <option value="3" selected>Anak</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control select2" id="data_3" name="data_3" style="width: 100%;">
                                    <option value=""></option>
                                    <option value="1" selected>Paspor Baru</option>
                                    <option value="2">Pergantian Paspor</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control select2" id="data_4" name="data_4" style="width: 100%;">
                                    <option value=""></option>
                                    <option value="1">9 Halaman</option>
                                    <option value="2">12 Halaman</option>
                                    <option value="3" selected>24 Halaman</option>
                                </select>
                            </td>
                            <td class="text-center">
                                Perbarui Data
                            </td>
                            <td class="text-center">
                                <a href="<?php echo base_url('data_pemohon'); ?>" class="btn btn-sm btn-primary btn-lengkapi" style="padding: 3px 10px;" title="Lengkapi Data Diri Pemohon"><i class="fa fa-files-o"></i>&nbsp; Lengkapi Data</a>
                            </td>
                        </tr>
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