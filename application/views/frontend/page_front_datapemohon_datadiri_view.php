<div class="row" style="margin-top: 20px;">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1_1" data-toggle="tab">Data Identitas Diri</a></li>
               <!--  <li><a href="#tab1_2" data-toggle="tab">Identitas Diri</a></li> -->
                <li><a href="#tab1_3" data-toggle="tab">Alamat</a></li>
                <li><a href="#tab1_4" data-toggle="tab">Riwayat Pendidikan</a></li>
                <li><a href="#tab1_5" data-toggle="tab">Rincian Pekerjaan</a></li>
                <li><a href="#tab1_6" data-toggle="tab">Tujuan Permohonan Paspor</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1_1">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                        
                            <div id="param_jpengajuan" class="form-group">
                                <label for="data1_2" class="col-sm-4 control-label">Jenis Pengajuan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data1_2" name="data1_2" style="width: 100%;" >
                                        <option value=""></option>
                                        <option value="1">Paspor Baru</option>
                                        <option value="2" selected>Pergantian Paspor</option>
                                    </select>
                                </div>
                            </div>
                            <div id="param_pasporlama" class="form-group">
                                <label for="data1_3" class="col-sm-4 control-label">Nomor Paspor Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_3" name="data1_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data1_4" class="col-sm-4 control-label">Jenis Paspor</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data1_4" name="data1_4" style="width: 100%;" >
                                        <option value=""></option>
                                        <option value="1">9 Halaman</option>
                                        <option value="2">12 Halaman</option>
                                        <option value="3" selected>24 Halaman</option>
                                    </select>
                                </div>
                            </div>
                            <div id="param_tempat" class="form-group">
                                <label for="data1_5" class="col-sm-4 control-label">Tempat Pengeluaran Paspor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_5" name="data1_5" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data1_6" class="col-sm-4 control-label">Kantor Imigrasi</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_6" name="data1_6" placeholder=". . ." value="Kanim Khusus Jakarta Selatan" readonly />
                                </div>
                            </div>

                        
                            <div id="param_nik1" class="form-group">
                                <label for="data2_1" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_1" name="data2_1" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_2" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_2" name="data2_2" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_3" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="data2_3" id="data1_3" value="L" type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="data2_3" id="data1_3" value="P" type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_4" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_4" name="data2_4" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data2_5" name="data2_5" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_6" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_6" name="data2_6" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_7" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_7" name="data2_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_8" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_8" name="data2_8" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Pegawai Negeri</option>
                                    </select>
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
                <div class="tab-pane" id="tab1_2">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div id="param_nik1" class="form-group">
                                <label for="data2_1" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_1" name="data2_1" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_2" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_2" name="data2_2" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_3" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="data2_3" id="data1_3" value="L" type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="data2_3" id="data1_3" value="P" type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_4" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_4" name="data2_4" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data2_5" name="data2_5" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_6" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_6" name="data2_6" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_7" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_7" name="data2_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_8" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_8" name="data2_8" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Pegawai Negeri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <div class="tab-pane" id="tab1_3">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Sesuai KTP</span>
                                    <hr style="margin: 5px auto;" />
                                </div>
                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div class="form-group">
                                        <label for="data3_1" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="data3_1" name="data3_1" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_2" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_2" name="data3_2" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_3" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_3" name="data3_3" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_4" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_4" name="data3_4" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_5" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_5" name="data3_5" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_6" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_6" name="data3_6" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_7" class="col-sm-5 control-label">Nomor Telepon Rumah</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_7" name="data3_7" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', ' ()-', false)" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_8" class="col-sm-5 control-label">Nomor Handphone</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_8" name="data3_8" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '+', false)" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_9" class="col-sm-5 control-label">Alamat Email</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_9" name="data3_9" placeholder=". . ." />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Tempat Tinggal</span>
                                    <hr style="margin: 5px auto;" />
                                </div>
                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div class="form-group">
                                        <label for="as_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                        <div class="col-sm-7">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="as_ktp" style="cursor: pointer;" />
                                                    <input type="hidden" id="data3_10" name="data3_10" />
                                                </label>
                                            </div>
                                            <div style="font-size: 9pt;">** checklist apabila alamat anda sesuai dengan ktp</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_11" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="data3_11" name="data3_11" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_12" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_12" name="data3_12" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_13" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_13" name="data3_13" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_14" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_14" name="data3_14" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_15" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="data3_15" name="data3_15" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_16" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_16" name="data3_16" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <br/><br/>
                                <div class="box-footer">
                                    <div class="col-sm-offset-5 col-sm-7">
                                        <button type="submit" class="btn bg-green">Simpan</button>
                                        <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane" id="tab1_4">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data4_1" class="col-sm-4 control-label">Sekolah Dasar (SD) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_1" name="data4_1" placeholder=". . ." />
                                </div>
<!--                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data4_2" name="data4_2" placeholder="Tahun Lulus ..." />
                                </div>-->
                            </div>
                            <div class="form-group">
                                <label for="data4_3" class="col-sm-4 control-label">Sekolah Menengah Pertama (SMP) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_3" name="data4_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data4_5" class="col-sm-4 control-label">Sekolah Menengah Atas (SMA) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_5" name="data4_5" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data4_7" class="col-sm-4 control-label">Perguruan Tinggi / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_7" name="data4_7" placeholder=". . ." />
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <div class="tab-pane" id="tab1_5">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div id="param_jabatan" class="form-group">
                                <label for="data5_1" class="col-sm-3 control-label">Jabatan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_1" name="data5_1" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_2" class="col-sm-3 control-label">Jumlah Penghasilan per Bulan</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data5_2" value="1" type="radio" />< 1 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data5_2" value="2" type="radio" />1 Juta &nbsp;<&nbsp; 2,5 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data5_2" value="3" type="radio" />2,5 Juta &nbsp;<&nbsp; 5 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data5_2" value="4" type="radio" />5 Juta &nbsp;<&nbsp; 10 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data5_2" value="5" type="radio" />> 10 Juta</label></div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row">
                            <div class="col-sm-12" style="margin: 10px 0px 20px 0px;">
                                <span style="font-size: 12pt;">Alamat Tempat Bekerja</span>
                                <hr style="margin: 5px auto;" />
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data5_3" class="col-sm-3 control-label">Alamat Lengkap</label>
                                <div class="col-sm-4">
                                    <textarea class="form-control" id="data5_3" name="data5_3" placeholder=". . ."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_4" class="col-sm-3 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_4" name="data5_4" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="ID" selected>Indonesia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_5" class="col-sm-3 control-label">Provinsi</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_5" name="data5_5" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" selected>DKI Jakarta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_6" class="col-sm-3 control-label">Kota / Kabupaten</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_6" name="data5_6" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" selected>Jakarta Selatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_7" class="col-sm-3 control-label">Kecamatan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_7" name="data5_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Daan Mogot</option>
                                        <option value="2">Grogol</option>
                                        <option value="3" selected>Setiabudi</option>
                                        <option value="4">Tebet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_8" class="col-sm-3 control-label">Kode Pos</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_8" name="data5_8" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_9" class="col-sm-3 control-label">Nomor Telepon Tempat Bekerja</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_9" name="data5_9" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', ' ()-', false)" />
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <div class="tab-pane" id="tab1_6">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data6_1" class="col-sm-4 control-label">Tujuan Perjalanan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_1" name="data6_1" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wisata</option>
                                        <option value="2">Sekolah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_2" class="col-sm-4 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_2" name="data6_2" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="SG">Singapura</option>
                                        <option value="MY">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_3" class="col-sm-4 control-label">Berapa Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_3" name="data6_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_4" class="col-sm-4 control-label">Tanggungan Biaya Perjalanan Luar Negeri</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data6_4" value="1" type="radio" />Biaya Sendiri</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data6_4" value="2" type="radio" />Biaya Dinas</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data6_4" value="3" type="radio" />Biaya Penjamin</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="data6_4" value="4" type="radio" />Biaya Pengundang</label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_5" class="col-sm-4 control-label">Pernah Keluar Negeri</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_5" name="data6_5" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_6" class="col-sm-4 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_6" name="data6_6" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="SG">Singapura</option>
                                        <option value="MY">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_7" class="col-sm-4 control-label">Berapa Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_7" name="data6_7" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_8" class="col-sm-4 control-label">Tujuan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_8" name="data6_8" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_9" class="col-sm-4 control-label">Pernah Bekerja Di Luar Negeri</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_9" name="data6_9" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row">
                            <div class="col-sm-12" style="margin: 20px 0px;">
                                <span style="font-size: 12pt;">Paspor Lain</span>
                                <hr style="margin: 5px auto;" />
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data6_10" class="col-sm-4 control-label">Memiliki Paspor Kebangsaan Lain</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_10" name="data6_10" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Ya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_11" class="col-sm-4 control-label">Kebangsaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_11" name="data6_11" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="SG">Singapura</option>
                                        <option value="MY">Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_12" class="col-sm-4 control-label">Nomor Paspor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_12" name="data6_12" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_13" class="col-sm-4 control-label">Tanggal Penerbitan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_13" name="data6_13" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_14" class="col-sm-4 control-label">Tanggal Habis Berlaku</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_14" name="data6_14" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
    </div>
</div>