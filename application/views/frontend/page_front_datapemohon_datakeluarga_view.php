<div class="row" style="margin-top: 20px;">
    <div class="col-md-12">
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
            <div class="tab-content">
                <h3 style="font-family: sans-serif;border-bottom: 1px solid #eee;padding-bottom: 5px;margin-top: 0px;">Data Suami/Istri</h3>
                <form class="form-horizontal" style="margin-top: 20px;"   action="<?php echo base_url() ?>Back_data_keluarga/<?php if($data1_count>0){echo"updateFamily";}else{ echo"createFamily"; }?>" method="POST" enctype="multipart/form-data">
                    <div class="box-body">
                        <div id="param_aktanikah" class="form-group">
                            <label for="dk1_1" class="col-sm-4 control-label">Nomor Akta Nikah / Surat Nikah</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?php if($data1_count>0){echo $data1->nomer_surat_nikah;} ?>" required="required" class="form-control" id="aktanikah1" name="aktanikah1" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)"  required/>
                            </div>
                        </div>
                        <div id="param_nik2" class="form-group">
                            <label for="dk1_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                            <div class="col-sm-4">
                                <input type="text" required="required" value="<?php if($data1_count>0){echo $data1->nik;} ?>" class="form-control" id="nik1" name="nik1" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" required />
                                 <input type="hidden"  class="form-control" id="nik1" name="id" value="<?php echo $this->uri->segment(2) ?>" required/>
                            
                             <input type="hidden"  class="form-control" id="nik1" name="idkel1" value="<?php if($data1_count>0){echo $data1->id;} ?>" required/>

                              <input type="hidden"  class="form-control" id="nik1" name="idkel2" value="<?php if($data2_count>0){echo $data2->id;} ?>" required/>


                               <input type="hidden"  class="form-control" id="nik1" name="idkel3" value="<?php if($data3_count>0){echo $data3->id; }?>" required/>




    <input type="hidden"  class="form-control" id="nik1" name="idket1" value="<?php if($data1_count>0){echo $data1->id_keterangan;} ?>" required/>

                              <input type="hidden"  class="form-control" id="nik1" name="idket2" value="<?php if($data2_count>0){echo $data2->id_keterangan;} ?>" required/>


                               <input type="hidden"  class="form-control" id="nik1" name="idkel3" value="<?php if($data3_count>0){echo $data3->id_keterangan;} ?>" required/>








                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk1_3" class="col-sm-4 control-label">Nama Lengkap</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?php if($data1_count>0){echo $data1->nama;} ?>" required="required" class="form-control" id="naleng1" name="naleng1" placeholder=". . ."  required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk1_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <div class="col-sm-3" style="padding-left: 0;">
                                    <div class="radio">
                                        <label><input  name="jkl1" value="L" type="radio" />Laki-laki</label>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding-left: 0;">
                                    <div class="radio">
                                        <label><input checked="checked"  name="jkp1" value="P" type="radio" />Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk1_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input value="<?php if($data1_count>0){echo $data1->tempat_lahir;} ?>" type="text" required="required" class="form-control" id="tempatl1" name="tempatl1" placeholder=". . ." />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="<?php if($data1_count>0){echo $data1->tanggal_lahir;} ?>" class="form-control" required="required" id="tgll1" name="tgll1" placeholder="dd/mm/yyyy"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk1_7" class="col-sm-4 control-label">Status Perkawinan</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" required="required" id="status1" name="status1" style="width: 100%;">
                                 <?php if($data1_count>0){ ?>

 <option value="<?php echo $data1->status; ?>">Menikah</option>

                                  <?php } ?>
                                   
                                    <option value=""></option>
                                    <option value="1">Menikah</option>
                                    <option value="2">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk1_8" class="col-sm-4 control-label">Jumlah Anak</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" required="required" id="jml1" name="jml1" style="width: 100%;">
                                  

 <?php if($data1_count>0){ ?>

 <option value="<?php echo $data1->jumlah_anak; ?>"><?php echo $data1->jumlah_anak; ?></option>

                                  <?php } ?>
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
                                <select class="form-control select2" required="required" id="pekerjaan1" name="pekerjaan1" style="width: 100%;">
                                   

 <?php if($data1_count>0){ ?>

 <option value="<?php echo $data1->id_pekerjaan; ?>">Wiraswasta</option>

                                  <?php } ?>
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
                                        <textarea class="form-control" required="required" id="alkapktp1" name="alkapktp1" placeholder=". . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_11" class="col-sm-5 control-label">Negara</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="negaraktp1" name="negaraktp1" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_12" class="col-sm-5 control-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="provinsiktp1" name="provinsiktp1" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>DKI Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kotaktp1" name="kotaktp1" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>Jakarta Selatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_14" class="col-sm-5 control-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kecamatanktp1" name="kecamatanktp1" style="width: 100%;">
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
                                        <input type="text" required="required" class="form-control" id="kodeposktp1" name="kodeposktp1" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
<!--                                <div class="form-group">
                                    <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                    <div class="col-sm-7">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                <input type="hidden" id="dk1_16" name="dk1_16" />
                                            </label>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="dk1_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" required="required" id="alkap1" name="alkap1" placeholder=". . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_18" class="col-sm-5 control-label">Negara</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="negara" name="negara" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_19" class="col-sm-5 control-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="provinsi" name="provinsi" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>DKI Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kota" name="kota" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>Jakarta Selatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk1_21" class="col-sm-5 control-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kecamatan" name="kecamatan" style="width: 100%;">
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
                                        <input type="text" class="form-control" required="required" id="kodepos" name="kodepos" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
<!--                    <br/>
                    <div class="box-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn bg-green">Simpan</button>
                            <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                        </div>
                    </div>-->
                    <!-- /.box-footer -->
                

                <h3 style="font-family: sans-serif;border-bottom: 1px solid #eee;padding-bottom: 5px;margin-top: 30pt;">Data Ayah</h3>
                
                    <div class="box-body">
                        <div class="form-group">
                            <label for="dk3_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?php if($data2_count>0){echo $data2->nik;} ?>"  class="form-control" required="required" id="nik2" name="nik2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk3_3" class="col-sm-4 control-label">Nama Lengkap</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?php if($data2_count>0){echo $data2->nama;} ?>" class="form-control" required="required" id="naleng2" name="naleng2" placeholder=". . ." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk3_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <div class="col-sm-3" style="padding-left: 0;">
                                    <div class="radio">
                                        <label><input name="jkl2" checked="checked" value="L"  type="radio" />Laki-laki</label>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding-left: 0;">
                                    <div class="radio">
                                        <label><input name="jkp2" value="P" type="radio" />Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk3_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?php if($data2_count>0){echo $data2->tempat_lahir;} ?>" class="form-control"  required="required" id="tempatl2" name="tempatl2" placeholder=". . ." />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="<?php if($data2_count>0){echo $data2->tanggal_lahir;} ?>" class="form-control" required="required" id="tgll2" name="tgll2" placeholder="dd/mm/yyyy" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk3_7" class="col-sm-4 control-label">Status Perkawinan</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" required="required" id="status2" name="status2" style="width: 100%;">
                                  
 <?php if($data2_count>0){ ?>

 <option value="<?php echo $data2->status; ?>">Menikah</option>

                                  <?php } ?>
                                    <option value=""></option>
                                    <option value="1">Menikah</option>
                                    <option value="2">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk3_8" class="col-sm-4 control-label">Jumlah Anak</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" required="required" id="jml2" name="jml2" style="width: 100%;">
                                   
 <?php if($data2_count>0){ ?>

 <option value="<?php echo $data2->jumlah_anak; ?>"><?php echo $data2->jumlah_anak; ?></option>

                                  <?php } ?>
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
                                <select class="form-control select2" required="required" id="pekerjaan2" name="pekerjaan2" style="width: 100%;">
                                  <?php if($data2_count>0){ ?>

 <option value="<?php echo $data2->id_pekerjaan; ?>">Pegawai Swasta</option>

                                  <?php } ?>
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
                                        <textarea class="form-control" required="required" id="alkapktp2" name="alkapktp2" placeholder=". . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_11" class="col-sm-5 control-label">Negara</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="negaraktp2" name="negaraktp2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_12" class="col-sm-5 control-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="provinsiktp2" name="provinsiktp2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>DKI Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kotaktp2" name="kotaktp2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>Jakarta Selatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_14" class="col-sm-5 control-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kecamatanktp2" name="kecamatanktp2" style="width: 100%;">
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
                                        <input type="text" class="form-control" required="required" id="kodeposktp2" name="kodeposktp2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
<!--                                <div class="form-group">
                                    <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                    <div class="col-sm-7">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                <input type="hidden" id="dk3_16" name="dk3_16" />
                                            </label>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="dk3_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" required="required" id="alkap2" name="alkap2" placeholder=". . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_18" class="col-sm-5 control-label">Negara</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="negara2" name="negara2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_19" class="col-sm-5 control-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="provinsi2" name="provinsi2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>DKI Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kota2" name="kota2" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>Jakarta Selatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk3_21" class="col-sm-5 control-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kecamtan2" name="kecamatan2" style="width: 100%;">
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
                                        <input type="text" class="form-control" required="required" id="kodepos2" name="kodepos2" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
<!--                    <br/>
                    <div class="box-footer">
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn bg-green">Simpan</button>
                            <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                        </div>
                    </div>-->
                    <!-- /.box-footer -->
                
                <h3 style="font-family: sans-serif;border-bottom: 1px solid #eee;padding-bottom: 5px;margin-top: 30pt;">Data Ibu</h3>
               
                    <div class="box-body">
                        <div class="form-group">
                            <label for="dk4_2" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                            <div class="col-sm-4">
                                <input type="text" required="required" class="form-control" id="nik3" name="nik3" value="<?php if($data3_count>0){echo $data3->nik;} ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk4_3" class="col-sm-4 control-label">Nama Lengkap</label>
                            <div class="col-sm-4">
                                <input type="text" required="required" value="<?php if($data3_count>0){echo $data3->nama;} ?>" class="form-control" id="naleng3" name="naleng3" placeholder=". . ." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk4_4" class="col-sm-4 control-label">Jenis Kelamin</label>
                            <div class="col-sm-6">
                                <div class="col-sm-3" style="padding-left: 0;">
                                    <div class="radio">
                                        <label><input  name="jkl3" 
                                         value="L" type="radio" />Laki-laki</label>
                                    </div>
                                </div>
                                <div class="col-sm-4" style="padding-left: 0;">
                                    <div class="radio">
                                        <label><input name="jkp3" 
                                         value="P" checked="checked" type="radio" />Perempuan</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk4_5" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                            <div class="col-sm-4">
                                <input type="text" value="<?php if($data3_count>0){echo $data3->tempat_lahir;} ?>" required="required" class="form-control" id="tgll3" name="tgll3" placeholder=". . ." />
                            </div>
                            <div class="col-sm-2">
                                <input type="text" value="<?php if($data3_count>0){echo $data3->tanggal_lahir;} ?>" required="required" class="form-control" id="tempatl3" name="tempatl3" placeholder="dd/mm/yyyy"  />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk4_7" class="col-sm-4 control-label">Status Perkawinan</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" required="required" id="status3" name="status3" style="width: 100%;">
                                  
 <?php if($data3_count>0){ ?>

 <option value="<?php echo $data3->status; ?>">Menikah</option>

                                  <?php } ?>
                                    <option value=""></option>
                                    <option value="1">Menikah</option>
                                    <option value="2">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dk4_8" class="col-sm-4 control-label">Jumlah Anak</label>
                            <div class="col-sm-4">
                                <select class="form-control select2" required="required" id="jml3" name="jml3" style="width: 100%;">
                                   
 <?php if($data3_count>0){ ?>

 <option value="<?php echo $data3->jumlah_anak; ?>"><?php echo $data3->jumlah_anak; ?></option>

                                  <?php } ?>
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
                                <select class="form-control select2" required="required" id="pekerjaan3" name="pekerjaan3" style="width: 100%;">
                                    
 <?php if($data3_count>0){ ?>

 <option value="<?php echo $data3->id_pekerjaan; ?>">Pegawai Swasta</option>

                                  <?php } ?>
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
                                        <textarea class="form-control" required="required" id="alkapktp3" name="alkapktp3" placeholder=". . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_11" class="col-sm-5 control-label">Negara</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="negaraktp3" name="negaraktp3" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_12" class="col-sm-5 control-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="provinsiktp3" name="provinsiktp3" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>DKI Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_13" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kotaktp3" name="kotaktp3" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>Jakarta Selatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_14" class="col-sm-5 control-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kecamatanktp3" name="kecamatanktp3" style="width: 100%;">
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
                                        <input type="text" class="form-control" required="required" id="kodeposktp3" name="kodeposktp3" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
<!--                                <div class="form-group">
                                    <label for="asdk_ktp" class="col-sm-5 control-label">Sesuai KTP</label>
                                    <div class="col-sm-7">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" id="asdk_ktp" style="cursor: pointer;" />
                                                <input type="hidden" id="dk4_16" name="dk4_16" />
                                            </label>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                    <label for="dk4_17" class="col-sm-5 control-label">Alamat Lengkap</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" required="required" id="alkap3" name="alkap3" placeholder=". . ."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_18" class="col-sm-5 control-label">Negara</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="negara3" name="negara3" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="ID" selected>Indonesia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_19" class="col-sm-5 control-label">Provinsi</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="provinsi3" name="provinsi3" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>DKI Jakarta</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_20" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kota3" name="kota3" style="width: 100%;">
                                            <option value=""></option>
                                            <option value="1" selected>Jakarta Selatan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dk4_21" class="col-sm-5 control-label">Kecamatan</label>
                                    <div class="col-sm-7">
                                        <select class="form-control select2" required="required" id="kecamatan3" name="kecamatan3" style="width: 100%;">
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
                                        <input type="text" required="required" class="form-control" id="kodepos3" name="kodepos3" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <!-- /.box-footer -->
                     <br/>
            <!--<div class="box-footer">-->
            <div class="col-sm-offset-4 col-sm-4 text-center" style="margin-top: 20pt;">
                    <button type="submit" class="btn bg-green">Simpan</button>
                    <button id="reset-btn" type="button" class="btn btn-default">Reset</button>
                </div>
                
            </div>
           
            <!--</div>-->
            <!-- /.tab-content -->
        
</form>
        </div>
        <!-- nav-tabs-custom -->
    </div>
</div>