<style type="text/css">
    table.dataTable thead > tr > th {
        padding: 10px !important;
    }
</style>

<!-- Main content -->
<div class="box box-default">
<!--    <div class="box-header with-border">
        <h3 class="box-title">Jadwal & Tempat Pengajuan</h3>
    </div>-->
    <div class="box-body">
        <div class="col-sm-12" style="margin: 10px 0px;">Silahkan pilih <b>Kantor Imigrasi</b> sesuai dengan Area Anda.</div>
        <div class="row" style="margin-top: 10px;">
            <div class="col-sm-12">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="data_tgl" class="control-label">Pilih Tanggal</label>
                        <input type="text" class="form-control" id="data_tgl" name="data_tgl" placeholder="dd/mm/yyyy" readonly value="28/09/2017" />
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="data_area" class="control-label">Pilih Area</label>
                        <select class="form-control select2" id="data_area" name="data_area" style="width: 100%;">
                            <option value=""></option>
                            <option value="1" selected>DKI Jakarta</option>
                            <option value="2">Jawa Barat</option>
                            <option value="3">Jawa Tengah</option>
                            <option value="4">Jawa Timur</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="data_jml" class="control-label">Jumlah Pengajuan</label>
                        <select class="form-control select2" id="data_jml" name="data_jml" style="width: 100%;">
                            <option value=""></option>
                            <option value="1">1 Orang Anggota Keluarga</option>
                            <option value="2" selected>2 Orang Anggota Keluarga</option>
                            <option value="3">3 Orang Anggota Keluarga</option>
                            <option value="4">4 Orang Anggota Keluarga</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12" style="margin: 20px 0px 10px 0px;">
            Hasil Pencarian.
            <hr style="margin: 5px auto;" />
        </div>
        <div class="col-sm-12">
            <table id="tbl" class="table table-striped table-responsive" style="width: 100%;">
                <thead>
                    <tr>
                        <th style="vertical-align: middle;width: 30%;" rowspan="2">Nama Kanim</th>
                        <th class="text-center" style="vertical-align: middle;" colspan="2">Jam Kerja</th>
                        <th class="text-center" style="vertical-align: middle;width: 12%;" rowspan="2">Kuota</th>
                        <th class="text-center" style="vertical-align: middle;" rowspan="2">Alamat</th>
                        <th class="text-center" style="vertical-align: middle;width: 8%;" rowspan="2"></th>
                    </tr>
                    <tr>
                        <th class="text-center" style="vertical-align: middle;width: 8%;">Pagi</th>
                        <th class="text-center" style="vertical-align: middle;width: 8%;">Siang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 15px;margin: -5px 7px 0px 0px;display: inline;" />
                            Kanim Khusus Jakarta Selatan
                        </td>
                        <td class="text-center">08:00</td>
                        <td class="text-center">12:00</td>
                        <td class="text-center">53 / 400</td>
                        <td style="text-align: justify;">
                            Jl. Warung Buncit Raya No. 207, Jakarta Selatan 12790
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-warning" style="padding: 3px 10px;" title="Pilih" onclick="pilihKanim(1)">PILIH</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 15px;margin: -5px 7px 0px 0px;display: inline;" />
                            Kanim Khusus Jakarta Barat
                        </td>
                        <td class="text-center">08:00</td>
                        <td class="text-center">12:00</td>
                        <td class="text-center">179 / 400</td>
                        <td>
                            Jl. Warung Buncit Raya No. 207, Jakarta Selatan 12790
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-warning" style="padding: 3px 10px;" title="Pilih" onclick="pilihKanim(1)">PILIH</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src="<?php echo base_url('assets/dist/img/logo/logo.png'); ?>" style="height: 15px;margin: -5px 7px 0px 0px;display: inline;" />
                            Kanim Jakarta Pusat
                        </td>
                        <td class="text-center">08:00</td>
                        <td class="text-center">12:00</td>
                        <td class="text-center">400 / 400</td>
                        <td>
                            Jl. Warung Buncit Raya No. 207, Jakarta Selatan 12790
                        </td>
                        <td class="text-center">
                            FULL
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->
<!-- /.content -->
<div id="kanim-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="padding: 5px 15px;">
                <h4>Data Pemohon</h4>
            </div>
            <div class="modal-body">
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
                        Daftar Pengaju.
                        <hr style="margin: 5px auto;" />
                    </div>
                    <div class="col-sm-12">
                        <table id="tbl2" class="table table-striped" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th style="vertical-align: middle;width: 30%;">Nama</th>
                                    <th class="text-center" style="vertical-align: middle;">Status</th>
                                    <th class="text-center" style="vertical-align: middle;">Jenis Pengajuan</th>
                                    <th class="text-center" style="vertical-align: middle;">Jenis Paspor</th>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="col-sm-12 text-center">
                    <button type="button" class="btn bg-green">Simpan</button>
                    <button id="reset-pemohon-btn" type="button" class="btn btn-default">Reset</button>
                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>

<!-- Select2 -->
<script src="<?php echo BASE_URL; ?>assets/plugins/select2/select2.full.min.js"></script>
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/datatables/dataTables.bootstrap.css">
<script src="<?php echo BASE_URL; ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/datepicker/datepicker3.css">
<script src="<?php echo BASE_URL; ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- jQuery Validation -->
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/plugins/jquery.easyui.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL; ?>assets/dist/js/app.min.js"></script>

<script src="<?php echo BACKJS_URL; ?>page_back_daftarkanim.js"></script>