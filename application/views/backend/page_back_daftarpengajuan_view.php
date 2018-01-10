<style type="text/css">
    table.dataTable thead > tr > th {
        padding: 10px !important;
    }
</style>

<!-- Main content -->
<div class="box box-default">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="data_time">Waktu Kedatangan</label>
                    <select class="form-control select2" id="data_time" name="data_time" style="width: 100%;">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="col-sm-offset-4 col-sm-5">
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Pengajuan</label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;2 Orang Anggota Keluarga</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Kanim</label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;Kanim Khusus Jakarta Selatan</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <label style="font-weight: 400;">Tanggal</label>
                        </div>
                        <div class="col-sm-9">
                            <label style="font-weight: 400;">:&nbsp;&nbsp;&nbsp;28/09/2017</label>
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
                            <th class="text-center" style="vertical-align: middle;">Status Data</th>
                            <th class="text-center" style="vertical-align: middle;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" class="form-control" id="data_1" name="data_1" value="Audie Ali Akhmad" />
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
                                <a href="<?php echo base_url('data_pemohon'); ?>" class="btn btn-sm btn-primary" style="padding: 3px 10px;" title="Lengkapi Data Diri Pemohon"><i class="fa fa-files-o"></i>&nbsp; Lengkapi Data</a>
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
                                <a href="<?php echo base_url('data_pemohon'); ?>" class="btn btn-sm btn-primary" style="padding: 3px 10px;" title="Lengkapi Data Diri Pemohon"><i class="fa fa-files-o"></i>&nbsp; Lengkapi Data</a>
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

<script src="<?php echo BACKJS_URL; ?>page_back_daftarpengajuan.js"></script>