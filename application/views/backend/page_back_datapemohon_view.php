<div id="data_pemohon" style="background-color: #fff;font-family: sans-serif;display: none;">
    <ul>
        <li class="done" style="width: 25%">
            <a href="#step-1">
                <span style="font-size: 24pt;">1</span>
                <span style="font-size: 12pt;display: inline;margin-left: 15px;">Data Diri</span>
            </a>
        </li>
        <li class="done" style="width: 25%">
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
            <?php $this->load->view('backend/page_back_datapemohon_datadiri_view'); ?>
        </div>
        <div id="step-2" class="">
            <?php $this->load->view('backend/page_back_datapemohon_datakeluarga_view'); ?>
        </div>
        <div id="step-3" class="">
            <div class="row" style="margin-top: 20px;">
                <div class="col-sm-12" style="margin: 10px 0px;font-size: 12pt;">
                    Silahkan upload hasil scan dari masing-masing dokumen dibawah ini.
                    <hr style="margin: 5px auto;" />
                </div>
                <div class="col-md-12">
                    <form class="form-horizontal" style="margin-top: 20px;" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-4">Format file yang didukung adalah <strong class="text-danger">jpg, png, pdf</strong>.</div>
                            </div>
                            <div class="form-group">
                                <label for="ud_1" class="col-sm-3 control-label">Akta Kelahiran <span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_1" name="ud_1" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9" style="font-style: italic;margin-bottom: 5px;">Jika anda tidak memiliki Akta Kelahiran, silahkan upload data dibawah ini.</div>
                                <label for="ud_4" class="col-sm-3 control-label">Ijazah</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_4" name="ud_4" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ud_2" class="col-sm-3 control-label">KTP <span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_2" name="ud_2" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ud_3" class="col-sm-3 control-label">Kartu Keluarga <span class="text-danger">*</span></label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_3" name="ud_3" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-7" style="font-style: italic;margin-bottom: 5px;">Jika anda memiliki Paspor Lama, silahkan upload data dibawah ini.</div>
                                <label for="ud_5" class="col-sm-3 control-label">Paspor Lama</label>
                                <div class="col-sm-4">
                                    <input type="file" class="form-control" id="ud_5" name="ud_5" />
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
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
                                <p class="text-left"> Dicetak tanggal: 25/09/2017</p>
                            </div>
                            <div class="col-lg-12">
                                <br><br>
                                <p class="text-center" style="margin-bottom: 20px;">TANDA TERIMA PERMOHONAN</p>
                            </div>
                        </div>
                        <!--<br>Tanggal Lahir<br>Jenis Permohonan<br>Harap Datang Ke<br><br><br>Tanggal Kedatangan<br>Jam-->
                        <!--<p class="text-left"> : SINGGIH AJI NUGROHO<br>: 26-10-1987<br>: 1A11 - 48H Perorangan Baru-Paspor Biasa<br>: Kanim Kelas I Khusus Jakarta Selatan<br>JL.warung Buncit Raya No.207,Jakarta Selatan<br>Jakarta, 12760<br>: rabu, 30-08-2017<br>: 08:00 - 10:00</p>-->
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3">Nama</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">SINGGIH AJI NUGROHO</div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3">Tanggal Lahir</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">26/10/1987</div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3">Jenis Permohonan</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">1A11 - 48H Perorangan Baru-Paspor Biasa</div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3">Harap Datang Ke</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">Kanim Kelas I Khusus Jakarta Selatan<br>JL.warung Buncit Raya No.207,Jakarta Selatan<br>Jakarta, 12760</div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3">Tanggal Kedatangan</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">28/09/2017</div>
                        </div>
                        <div class="row" style="margin: 5px 0px;">
                            <div class="col-lg-offset-1 col-lg-3">Pukul</div><div class="col-lg-1" style="width: 0px;padding-right: 0px;">:</div>
                            <div class="col-lg-6">08:00 - 10:00</div>
                        </div>
                        <div class="row" style="margin: 20px 0px;">
                            <div class="col-lg-offset-1 col-lg-6">
                                <p class="text-left">Catatan:</p>
                                <p class="text-left">- Membawa dokumen persyaratan asli;</p>
                                <p class="text-left">- Pakaian sopan warna bebas selain putih;</p> 
                                <p class="text-left">- Membawa paspor asli bagi mereka yang melakukan penggantian karena habis masa berlaku (penggantian);</p> 
                                <p class="text-left">- Apabila pemohon tidak datang ke kantor Imigrasi hingga 7 hari sejak jadwal tanggal kedatangan, maka permohonan ini akan di batalkan secara otomatis oleh sistem SPRI;</p> 
                                <p class="text-left">- Tanda Terima Permohonan ini wajib dibawa beserta bukti pembayaran dari bank (khusus kantor Imigrasi yang melakukanpembayaran via bank) untuk mendapatkan nomor antrian;</p> 
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

<script src="<?php echo BACKJS_URL; ?>page_back_datapemohon.js?v=1"></script>