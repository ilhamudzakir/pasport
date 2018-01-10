<div class="row" style="margin-top: 20px;">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab2_1" data-toggle="tab">Data Istri/Suami</a></li>
                <li><a href="#tab2_2" data-toggle="tab">Data Anak</a></li>
                <li><a href="#tab2_3" data-toggle="tab">Data Ayah</a></li>
                <li><a href="#tab2_4" data-toggle="tab">Data Ibu</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab2_1">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dk1_1" class="col-sm-4 control-label">Nomor Akta Nikah / Surat Nikah</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk1_1" name="dk1_1" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk1_2" name="dk1_2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_3" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk1_3" name="dk1_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk1_4" value="L" type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk1_4" value="P" type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk1_5" name="dk1_5" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="dk1_6" name="dk1_6" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_7" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk1_7" name="dk1_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_8" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk1_8" name="dk1_8" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk1_9" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk1_9" name="dk1_9" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Pegawai Negeri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Sesuai KTP</span>
                                    <hr style="margin: 5px auto;" />
                                </div>
                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div class="form-group">
                                        <label for="dk1_10" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk1_10" name="dk1_10" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_11" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_11" name="dk1_11" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_12" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_12" name="dk1_12" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_13" name="dk1_13" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_14" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_14" name="dk1_14" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_15" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk1_15" name="dk1_15" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
                                        <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                        <div class="col-sm-7">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                    <input type="hidden" id="dk1_16" name="dk1_16" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk1_17" name="dk1_17" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_18" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_18" name="dk1_18" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_19" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_19" name="dk1_19" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_20" name="dk1_20" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_21" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk1_21" name="dk1_21" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk1_22" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk1_22" name="dk1_22" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
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
                <div class="tab-pane" id="tab2_2">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dk2_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk2_2" name="dk2_2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk2_3" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk2_3" name="dk2_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk2_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk2_4" value="L" type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk2_4" value="P" type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk2_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk2_5" name="dk2_5" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="dk2_6" name="dk2_6" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk2_7" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk2_7" name="dk2_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk2_8" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk2_8" name="dk2_8" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk2_9" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk2_9" name="dk2_9" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Pegawai Negeri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Sesuai KTP</span>
                                    <hr style="margin: 5px auto;" />
                                </div>
                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div class="form-group">
                                        <label for="dk2_10" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk2_10" name="dk2_10" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_11" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_11" name="dk2_11" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_12" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_12" name="dk2_12" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_13" name="dk2_13" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_14" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_14" name="dk2_14" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_15" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk2_15" name="dk2_15" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
                                        <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                        <div class="col-sm-7">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                    <input type="hidden" id="dk2_16" name="dk2_16" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk2_17" name="dk2_17" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_18" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_18" name="dk2_18" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_19" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_19" name="dk2_19" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_20" name="dk2_20" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_21" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk2_21" name="dk2_21" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk2_22" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk2_22" name="dk2_22" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
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
                <div class="tab-pane" id="tab2_3">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dk3_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk3_2" name="dk3_2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk3_3" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk3_3" name="dk3_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk3_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk3_4" value="L" type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk3_4" value="P" type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk3_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk3_5" name="dk3_5" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="dk3_6" name="dk3_6" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk3_7" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk3_7" name="dk3_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk3_8" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk3_8" name="dk3_8" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk3_9" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk3_9" name="dk3_9" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Pegawai Negeri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Sesuai KTP</span>
                                    <hr style="margin: 5px auto;" />
                                </div>
                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div class="form-group">
                                        <label for="dk3_10" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk3_10" name="dk3_10" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_11" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_11" name="dk3_11" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_12" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_12" name="dk3_12" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_13" name="dk3_13" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_14" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_14" name="dk3_14" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_15" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk3_15" name="dk3_15" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
                                        <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                        <div class="col-sm-7">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                    <input type="hidden" id="dk3_16" name="dk3_16" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk3_17" name="dk3_17" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_18" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_18" name="dk3_18" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_19" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_19" name="dk3_19" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_20" name="dk3_20" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_21" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk3_21" name="dk3_21" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk3_22" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk3_22" name="dk3_22" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
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
                <div class="tab-pane" id="tab2_4">
                    <form class="form-horizontal" style="margin-top: 20px;">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="dk4_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk4_2" name="dk4_2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk4_3" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk4_3" name="dk4_3" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk4_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk4_4" value="L" type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="dk4_4" value="P" type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk4_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="dk4_5" name="dk4_5" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="dk4_6" name="dk4_6" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk4_7" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk4_7" name="dk4_7" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Menikah</option>
                                        <option value="2">Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk4_8" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk4_8" name="dk4_8" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="2">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dk4_9" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="dk4_9" name="dk4_9" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1">Wiraswasta</option>
                                        <option value="2">Pegawai Swasta</option>
                                        <option value="2">Pegawai Negeri</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Sesuai KTP</span>
                                    <hr style="margin: 5px auto;" />
                                </div>
                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div class="form-group">
                                        <label for="dk4_10" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk4_10" name="dk4_10" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_11" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_11" name="dk4_11" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_12" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_12" name="dk4_12" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_13" name="dk4_13" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_14" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_14" name="dk4_14" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_15" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk4_15" name="dk4_15" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
                                        <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                        <div class="col-sm-7">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                    <input type="hidden" id="dk4_16" name="dk4_16" />
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="dk4_17" name="dk4_17" placeholder=". . ."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_18" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_18" name="dk4_18" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="ID" selected>Indonesia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_19" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_19" name="dk4_19" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>DKI Jakarta</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_20" name="dk4_20" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1" selected>Jakarta Selatan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_21" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="dk4_21" name="dk4_21" style="width: 100%;">
                                                <option value=""></option>
                                                <option value="1">Daan Mogot</option>
                                                <option value="2">Grogol</option>
                                                <option value="3" selected>Setiabudi</option>
                                                <option value="4">Tebet</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dk4_22" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="dk4_22" name="dk4_22" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
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