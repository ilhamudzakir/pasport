<style type="text/css">
    table.dataTable thead > tr > th {
        padding: 10px !important;
    }
</style>

<!-- Main content -->
<div class="box box-default">
    <div class="box-body">
        <div class="row">
            <div class="col-sm-12">
                <table id="tbl" class="table table-striped" style="width: 100%;">
                    <thead>
                        <tr>
                            <th style="vertical-align: middle;width: 5%;">No</th>
                            <th style="vertical-align: middle;width: 22%;">Nama</th>
                            <th style="vertical-align: middle;width: 10%;">Status</th>
                            <th style="vertical-align: middle;">Jenis Pengajuan</th>
                            <th style="vertical-align: middle;">Jenis Paspor</th>
                            <th class="text-center" style="vertical-align: middle;">Tanggal Pengajuan</th>
                            <th class="text-center" style="vertical-align: middle;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-right">1.</td>
                            <td>Audie Ali Akhmad</td>
                            <td>Suami</td>
                            <td>Pergantian Paspor</td>
                            <td>24 Halaman</td>
                            <td class="text-center">28/09/2017</td>
                            <td class="text-center">
                                <a href="<?php echo base_url('data_pemohon'); ?>" class="btn btn-sm btn-primary" style="padding: 3px 10px;" title="Lihat Data Pemohon"><i class="fa fa-search"></i>&nbsp; Lihat Data</a>
                                <a href="" class="btn btn-sm btn-warning" style="padding: 3px 10px;" title="Verifikasi Data Pemohon"><i class="fa fa-check"></i>&nbsp; Verifikasi</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-right">2.</td>
                            <td>Putri Kirana</td>
                            <td>Anak</td>
                            <td>Paspor Baru</td>
                            <td>24 Halaman</td>
                            <td class="text-center">28/09/2017</td>
                            <td class="text-center">
                                <a href="<?php echo base_url('data_pemohon'); ?>" class="btn btn-sm btn-primary" style="padding: 3px 10px;" title="Lihat Data Pemohon"><i class="fa fa-search"></i>&nbsp; Lihat Data</a>
                                <a href="" class="btn btn-sm btn-warning" style="padding: 3px 10px;" title="Verifikasi Data Pemohon"><i class="fa fa-check"></i>&nbsp; Verifikasi</a>
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
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/plugins/datatables/dataTables.bootstrap.css">
<script src="<?php echo BASE_URL; ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo BASE_URL; ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo BASE_URL; ?>assets/dist/js/app.min.js"></script>

<script src="<?php echo BACKJS_URL; ?>page_back_verifypengajuan.js"></script>