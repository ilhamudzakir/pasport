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
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_datadiri/1" style="margin-top: 20px;">
                        <input type="hidden" name="id" value="<?php echo isset($data->id)?$data->id:""; ?>">
                        <div class="box-body">
                        
                            <div id="param_jpengajuan" class="form-group">
                                <label for="data1_2" class="col-sm-4 control-label">Jenis Pengajuan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data1_2" name="id_jenis_pengajuan" style="width: 100%;" >
                                        <option value=""></option>
                                        <?php
                                        // debugCode($data);
                                            if(isset($data->id_jenis_pengajuan)){
                                                if($data->id_jenis_pengajuan == 1){
                                                    $s1 = "selected=selected";
                                                    $s2 ="";
                                                }else if($data->id_jenis_pengajuan == 2){
                                                    $s1 = "";
                                                    $s2 ="selected=selected";
                                                }

                                            }
                                        ?>
                                        <option value="1" <?php echo $s1; ?>>Paspor Baru</option>
                                        <option value="2" <?php echo $s2; ?>>Pergantian Paspor</option>
                                    </select>
                                </div>
                            </div>

                            <div id="param_pasporlama" class="form-group">
                                <label for="data1_3" class="col-sm-4 control-label">Nomor Paspor Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_3" value="<?php echo isset($data->nomer_pasport_lama)?$data->nomer_pasport_lama:"" ?>" name="nomer_pasport_lama" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data1_4" class="col-sm-4 control-label">Jenis Paspor</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data1_4" name="id_jenis_paspor" style="width: 100%;" >
                                        <option value=""></option>
                                         <?php
                                        //debugCode($data);
                                            if(isset($data->id_jenis_paspor)){
                                                if($data->id_jenis_paspor == 1){
                                                    $ss1 = "selected=selected";
                                                    $ss2 ="";
                                                }else if($data->id_jenis_paspor == 2){
                                                    $ss1 = "";
                                                    $ss2 ="selected=selected";
                                                    $ss3 ="";
                                                }else if($data->id_jenis_paspor == 3){
                                                    $ss1 = "";
                                                    $ss2 ="";
                                                    $ss3 ="selected=selected";
                                                }

                                            }
                                        ?>
                                        <option value="1" <?php echo $s1; ?>>9 Halaman</option>
                                        <option value="2" <?php echo $s2; ?>>12 Halaman</option>
                                        <option value="3" <?php echo $s3; ?>>24 Halaman</option>
                                    </select>
                                </div>
                            </div>
                            <div id="param_tempat" class="form-group">
                                <label for="data1_5" class="col-sm-4 control-label">Tempat Pengeluaran Paspor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_5" value="<?php echo isset($data->tempat_pengeluaran_paspor)?$data->tempat_pengeluaran_paspor:"" ?>" name="tempat_pengeluaran_paspor" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data1_6" class="col-sm-4 control-label">Kantor Imigrasi</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_6" name="kantor_imigrasi" placeholder=". . ." value="<?php echo isset($data->kantor_imigrasi)?$data->kantor_imigrasi:"" ?>" readonly />
                                </div>
                            </div>

                        
                            <div id="param_nik1" class="form-group">
                                <label for="data2_1" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_1" name="nik" value="<?php echo isset($data->nik)?$data->nik:"" ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_2" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_2" name="nama" value="<?php echo isset($data->nama)?$data->nama:"" ?>" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_3" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="jenis_kelamin" id="data1_3" value="L" <?php  if($data->jenis_kelamin == "L"){ echo 'checked="checked"';} ?> type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="jenis_kelamin" id="data1_3" value="P" <?php  if($data->jenis_kelamin == "P"){ echo 'checked="checked"';} ?> type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_4" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_4" value="<?php echo isset($data->tempat_lahir)?$data->tempat_lahir:"" ?>" name=" tempat_lahir" placeholder=". . ." />
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data2_5" name="tanggal_lahir" value="<?php echo isset($data->tanggal_lahir)?$data->tanggal_lahir:"" ?>" placeholder="dd/mm/yyyy"  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_6" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_6" name="status" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->status)){ if($data->status == 1 ){ echo "selected";}else{"";}} ?>>Menikah</option>
                                        <option value="2" <?php if(isset($data->status)){ if($data->status == 2 ){ echo "selected";}else{"";}} ?> >Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_7" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_7" name="jumlah_anak" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 1 ){ echo "selected";}else{"";}} ?>>1</option>
                                        <option value="2" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 2 ){ echo "selected";}else{"";}} ?>>2</option>
                                        <option value="2" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 3 ){ echo "selected";}else{"";}} ?> >3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_8" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_8" name="id_pekerjaan" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->id_pekerjaan)){ if($data->id_pekerjaan == 1 ){ echo "selected";}else{"";}} ?> >Wiraswasta</option>
                                        <option value="2" <?php if(isset($data->id_pekerjaan)){ if($data->id_pekerjaan == 2 ){ echo "selected";}else{"";}} ?> >Pegawai Swasta</option>
                                        <option value="3" <?php if(isset($data->id_pekerjaan)){ if($data->id_pekerjaan == 3 ){ echo "selected";}else{"";}} ?> >Pegawai Negeri</option>
                                    </select>
                                </div>
                            </div>
                       </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" name="save_datadiri" class="btn bg-green">Simpan</button>
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
                                    <select class="form-control select2" id="data2_6" name="status" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->status)){ if($data->status == 1){ echo "selected"; }else{"";}} ?>>Menikah</option>
                                        <option value="2" <?php if(isset($data->status)){ if($data->status == 2){ echo "selected"; }else{"";}} ?>>Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_7" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_7" name="jumlah_anak" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 1){ echo "selected"; }else{"";}} ?>>1</option>
                                        <option value="2" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 2){ echo "selected"; }else{"";}} ?> >2</option>
                                        <option value="2" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 3){ echo "selected"; }else{"";}} ?> >3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_8" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_8" name="id_pekerjaan" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->id_pekerjaan)){ if($data->id_pekerjaan == 1){ echo "selected"; }else{"";}} ?> >Wiraswasta</option>
                                        <option value="2" <?php if(isset($data->id_pekerjaan)){ if($data->id_pekerjaan == 2){ echo "selected"; }else{"";}} ?> >Pegawai Swasta</option>
                                        <option value="2" <?php if(isset($data->id_pekerjaan)){ if($data->id_pekerjaan == 3){ echo "selected"; }else{"";}} ?> >Pegawai Negeri</option>
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
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_riwayat_pendidikan/1" style="margin-top: 20px;">
                        <input type="hidden" name="FormXID" value="<?php echo isset($data->id)?$data->id:""; ?>">
                        <input type="hidden" name="id" value="<?php echo isset($pendidikan->id)?$pendidikan->id:""; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data4_1" class="col-sm-4 control-label">Sekolah Dasar (SD) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_1" value="<?php echo isset($pendidikan->sd)?$pendidikan->sd:""; ?>" name="sd" placeholder=". . ." />
                                </div>
<!--                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data4_2" name="data4_2" placeholder="Tahun Lulus ..." />
                                </div>-->
                            </div>
                            <div class="form-group">
                                <label for="data4_3" class="col-sm-4 control-label">Sekolah Menengah Pertama (SMP) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_3" value="<?php echo isset($pendidikan->smp)?$pendidikan->smp:""; ?>" name="smp" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data4_5" class="col-sm-4 control-label">Sekolah Menengah Atas (SMA) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_5" value="<?php echo isset($pendidikan->sma)?$pendidikan->sma:""; ?>" name="sma" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data4_7" class="col-sm-4 control-label">Perguruan Tinggi / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_7" value="<?php echo isset($pendidikan->perguran_tinggi)?$pendidikan->perguran_tinggi:""; ?>" name="perguran_tinggi" placeholder=". . ." />
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
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_riwayat_pekerjaan/1" style="margin-top: 20px;">
                        <input type="hidden" name="FormXID" value="<?php echo isset($data->id)?$data->id:""; ?>">
                         <input type="hidden" name="id" value="<?php echo isset($pekerjaan->id)?$pekerjaan->id:""; ?>">
                        <div class="box-body">
                            <div id="param_jabatan" class="form-group">
                                <label for="data5_1" class="col-sm-3 control-label">Nama Perusahaan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_1" value="<?php echo isset($pekerjaan->nama_perusahan)?$pekerjaan->nama_perusahan:""; ?>" name="nama_perusahan" placeholder=". . ." />
                                </div>
                            </div> 
                            <div id="param_jabatan" class="form-group">
                                <label for="data5_1" class="col-sm-3 control-label">Jabatan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_1" value="<?php echo isset($pekerjaan->jabatan)?$pekerjaan->jabatan:""; ?>" name="jabatan" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_2" class="col-sm-3 control-label">Jumlah Penghasilan per Bulan</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="1" <?php  if($pekerjaan->salary == "1"){ echo 'checked="checked"';} ?> type="radio" />< 1 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="2" <?php  if($pekerjaan->salary == "2"){ echo 'checked="checked"';} ?> type="radio" />1 Juta &nbsp;<&nbsp; 2,5 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="3" <?php  if($pekerjaan->salary == "3"){ echo 'checked="checked"';} ?> type="radio" />2,5 Juta &nbsp;<&nbsp; 5 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="4" <?php  if($pekerjaan->salary == "4"){ echo 'checked="checked"';} ?> type="radio" />5 Juta &nbsp;<&nbsp; 10 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="5" <?php  if($pekerjaan->salary == "5"){ echo 'checked="checked"';} ?> type="radio" />> 10 Juta</label></div>
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
                                    <textarea class="form-control" id="data5_3" name="alamat" value="<?php echo isset($pekerjaan->alamat)?$pekerjaan->alamat:""; ?>" placeholder=". . ."><?php echo isset($pekerjaan->alamat)?$pekerjaan->alamat:""; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_4" class="col-sm-3 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_4" name="id_negara" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="ID" <?php if(isset($pekerjaan->id_negara)){ if($pekerjaan->id_negara == "ID"){ echo "selected"; }else{"";}} ?> selected>Indonesia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_5" class="col-sm-3 control-label">Provinsi</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_5" name="id_provinsi" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($pekerjaan->id_provinsi)){ if($pekerjaan->id_provinsi == 1){ echo "selected"; }else{"";}} ?> selected>DKI Jakarta</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_6" class="col-sm-3 control-label">Kota / Kabupaten</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_6" name="id_kota" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($pekerjaan->id_kota)){ if($pekerjaan->id_kota == 1){ echo "selected"; }else{"";}} ?>>Jakarta Selatan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_7" class="col-sm-3 control-label">Kecamatan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data5_7" name="id_kecamatan" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($pekerjaan->id_kecamatan)){ if($pekerjaan->id_kecamatan == 1){ echo "selected"; }else{"";}} ?> >Daan Mogot</option>
                                        <option value="2"  <?php if(isset($pekerjaan->id_kecamatan)){ if($pekerjaan->id_kecamatan == 2){ echo "selected"; }else{"";}} ?> >Grogol</option>
                                        <option value="3"  <?php if(isset($pekerjaan->id_kecamatan)){ if($pekerjaan->id_kecamatan == 3){ echo "selected"; }else{"";}} ?> >Setiabudi</option>
                                        <option value="4"  <?php if(isset($pekerjaan->id_kecamatan)){ if($pekerjaan->id_kecamatan == 4){ echo "selected"; }else{"";}} ?> >Tebet</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_8" class="col-sm-3 control-label">Kode Pos</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_8" value="<?php echo isset($pekerjaan->kode_pos)?$pekerjaan->kode_pos:""; ?>" name="kode_pos" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_9" class="col-sm-3 control-label">Nomor Telepon Tempat Bekerja</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_9" value="<?php echo isset($pekerjaan->telpon)?$pekerjaan->telpon:""; ?>" name="telpon" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', ' ()-', false)" />
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
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_permohonan_paspor/1" style="margin-top: 20px;">
                         <input type="hidden" name="FormXID" value="<?php echo isset($data->id)?$data->id:""; ?>">
                         <input type="hidden" name="id" value="<?php echo isset($mohon->id)?$mohon->id:""; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data6_1" class="col-sm-4 control-label">Tujuan Perjalanan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_1" name="id_tujuan_perjalanan" style="width: 100%;">
                                        <option value=""></option>
                                        <?php 
                                             
                                            if(isset($mohon->id_tujuan_perjalanan)){
                                                if($mohon->id_tujuan_perjalanan == 1){
                                                    $p1 = "selected=selected";
                                                    $p2 ="";
                                                }else if($data->id_jenis_paspor == 2){
                                                    $p1 = "";
                                                    $p2 ="selected=selected";
                                                   
                                                }

                                            }
                                            
                                        ?>
                                        <option value="1" <?php echo $p1; ?>>Wisata</option>
                                        <option value="2"  <?php echo $p2; ?>>Sekolah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_2" class="col-sm-4 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_2" name="negara_tujuan" style="width: 100%;">
                                        <option value=""></option>
                           
                                        <option value="SG" <?php if(isset($mohon->negara_tujuan)){ if($mohon->negara_tujuan == "SG"){ echo "selected"; }else{"";}} ?>>Singapura</option>
                                        <option value="MY" <?php if(isset($mohon->negara_tujuan)){ if($mohon->negara_tujuan == "MY"){ echo "selected"; }else{"";}} ?>>Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_3" class="col-sm-4 control-label">Berapa Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_3" value="<?php echo isset($mohon->berapa_lama_perjalanan)?$mohon->berapa_lama_perjalanan:""; ?>" name="berapa_lama_perjalanan" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_4" class="col-sm-4 control-label">Tanggungan Biaya Perjalanan Luar Negeri</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if($mohon->tanggungan_biaya == "1"){ echo 'checked="checked"';} ?> value="1" type="radio" />Biaya Sendiri</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if($mohon->tanggungan_biaya == "2"){ echo 'checked="checked"';} ?> value="2" type="radio" />Biaya Dinas</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if($mohon->tanggungan_biaya == "3"){ echo 'checked="checked"';} ?> value="3" type="radio" />Biaya Penjamin</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if($mohon->tanggungan_biaya == "4"){ echo 'checked="checked"';} ?> value="4" type="radio" />Biaya Pengundang</label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_5" class="col-sm-4 control-label">Pernah Keluar Negeri</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="pernah_keluar_negri" name="pernah_keluar_negri" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($mohon->pernah_keluar_negri)){ if($mohon->pernah_keluar_negri == 1){ echo "selected"; }else{"";}} ?>>Ya</option>
                                        <option value="0" <?php if(isset($mohon->pernah_keluar_negri)){ if($mohon->pernah_keluar_negri == 0){ echo "selected"; }else{"";}} ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_6" class="col-sm-4 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_6" name="negara_pernah" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="SG" <?php if(isset($mohon->negara_pernah)){ if($mohon->negara_pernah == "SG"){ echo "selected"; }else{"";}} ?>>Singapura</option>
                                        <option value="MY" <?php if(isset($mohon->negara_pernah)){ if($mohon->negara_pernah == "MY"){ echo "selected"; }else{"";}} ?>>Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_7" class="col-sm-4 control-label">Berapa Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="bearpa_lama" value="<?php echo isset($mohon->bearpa_lama)?$mohon->bearpa_lama:""; ?>" name="bearpa_lama" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_8" class="col-sm-4 control-label">Tujuan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tujuan" value="<?php echo isset($mohon->tujuan)?$mohon->tujuan:""; ?>" name="tujuan" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_9" class="col-sm-4 control-label">Pernah Bekerja Di Luar Negeri</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_9" name="pernah_bekerja_luar_negri" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($mohon->pernah_bekerja_luar_negri)){ if($mohon->pernah_bekerja_luar_negri == 1){ echo "selected"; }else{"";}} ?>>Ya</option>
                                        <option value="0" <?php if(isset($mohon->pernah_bekerja_luar_negri)){ if($mohon->pernah_bekerja_luar_negri == 0){ echo "selected"; }else{"";}} ?>>Tidak</option>
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
                                    <select class="form-control select2" id="data6_10" name="memiliki_paspor_negara_lain" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($mohon->memiliki_paspor_negara_lain)){ if($mohon->memiliki_paspor_negara_lain == 1){ echo "selected"; }else{"";}} ?>>Ya</option>
                                        <option value="0" <?php if(isset($mohon->memiliki_paspor_negara_lain)){ if($mohon->memiliki_paspor_negara_lain == 0){ echo "selected"; }else{"";}} ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_11" class="col-sm-4 control-label">Kebangsaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_11" name="id_kebangsaan" style="width: 100%;">
                                        <option value=""></option>
                                        <option value="SG" <?php if(isset($mohon->id_kebangsaan)){ if($mohon->id_kebangsaan == "SG"){ echo "selected"; }else{"";}} ?>>Singapura</option>
                                        <option value="MY" <?php if(isset($mohon->id_kebangsaan)){ if($mohon->id_kebangsaan == "MY"){ echo "selected"; }else{"";}} ?>>Malaysia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_12" class="col-sm-4 control-label">Nomor Paspor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_12" value="<?php echo isset($mohon->nomer_paspor)?$mohon->nomer_paspor:""; ?>" name="nomer_paspor" placeholder=". . ." />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_13" class="col-sm-4 control-label">Tanggal Penerbitan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_13" value="<?php echo isset($mohon->tanggal_penerbitan)?$mohon->tanggal_penerbitan:""; ?>" name="tanggal_penerbitan" placeholder="dd/mm/yyyy" readonly />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_14" class="col-sm-4 control-label">Tanggal Habis Berlaku</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_14" value="<?php echo isset($mohon->tanggal_berlaku)?$mohon->tanggal_berlaku:""; ?>" name="tanggal_berlaku" placeholder="dd/mm/yyyy" readonly />
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