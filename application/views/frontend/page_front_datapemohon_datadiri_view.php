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

                <div class="tab-pane <?php if($data->cek_tab == 1 OR $data->cek_tab == 0 ){ echo "active"; }else{ echo "";} ?>" id="tab1_1">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_datadiri/<?php echo $this->uri->segment(2);?>" style="margin-top: 20px;">
                        <input type="hidden" name="cek_tab" value="1">
                        <input type="hidden" name="id" value="<?php echo isset($data->id)?$data->id:""; ?>">
                        <input type="hidden" name="id_daftar_pengajuan" value="<?php echo isset($data->id_daftar_pengajuan)?$data->id_daftar_pengajuan:""; ?>">
                        <div class="box-body">
                        
                            <div id="param_jpengajuan" class="form-group">
                                <label for="data1_2" class="col-sm-4 control-label">Jenis Pengajuan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="jpengajuan" name="id_jenis_pengajuan" style="width: 100%;" required >
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
                                    <input type="text" class="form-control" id="data1_32" value="<?php echo isset($data->nomer_pasport_lama)?$data->nomer_pasport_lama:"" ?>" name="nomer_pasport_lama" placeholder=". . ."  />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data1_4" class="col-sm-4 control-label">Jenis Paspor</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data1_4" name="id_jenis_paspor" style="width: 100%;" required>
                                        <option value=""></option>
                                         <?php
                                        if(isset($data->id_jenis_paspor)){
                                                if($data->id_jenis_paspor == 1){
                                                    $jp1 = "selected=selected";
                                                    $jp2 ="";
                                                    $jp3 ="";
                                                }else if($data->id_jenis_paspor == 2){
                                                    $jp1 = "";
                                                    $jp2 ="selected=selected";
                                                    $jp3 ="";
                                                }else if($data->id_jenis_paspor == 3){
                                                    $jp1 = "";
                                                    $jp2 ="";
                                                    $jp3 ="selected=selected";
                                                }

                                            }
                                        ?>
                                        <option value="1" <?php echo $jp1; ?>>9 Halaman</option>
                                        <option value="2" <?php echo $jp2; ?>>12 Halaman</option>
                                        <option value="3" <?php echo $jp3; ?>>24 Halaman</option>
                                    </select>
                                </div>
                            </div>
                            <div id="param_tempat" class="form-group">
                                <label for="data1_5" class="col-sm-4 control-label">Tempat Pengeluaran Paspor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data1_5" value="<?php echo isset($data->tempat_pengeluaran_paspor)?$data->tempat_pengeluaran_paspor:"" ?>" name="tempat_pengeluaran_paspor" placeholder=". . ." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data1_6" class="col-sm-4 control-label">Kantor Imigrasi</label>
                                
                                <div class="col-sm-4">
                                    <input type="hidden" name="id_kantor_imgirasi" value="<?php echo isset($data->id_kantor_imgirasi)?$data->id_kantor_imgirasi:"" ?>">
                                    <select class="form-control select2"  name="id_kantor_imgirasi" style="width: 100%;" required disabled>
                                        
                                        <?php //debugCode($data); ?>
                                         <?php foreach ($kanim as $key) { ?>
                                            <option value="<?php echo $data->id_kantor_imgirasi;?>" <?php if(isset($data->id_kantor_imgirasi)){ if($data->id_kantor_imgirasi == $key->MO_ID ){ echo "selected";}else{"";}} ?> ><?php echo $key->MO_NAME ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                        
                            <div id="param_nik1" class="form-group">
                                <label for="data2_1" class="col-sm-4 control-label">Nomor Induk Kependudukan (NIK)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_1" name="nik" value="<?php echo isset($data->nik)?$data->nik:"" ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_2" class="col-sm-4 control-label">Nama Lengkap</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_2" name="nama" value="<?php echo isset($data->nama)?$data->nama:"" ?>" placeholder=". . ." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_3" class="col-sm-4 control-label">Jenis Kelamin</label>
                                <div class="col-sm-6">
                                    <div class="col-sm-3" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="jenis_kelamin" id="data1_33" value="L" checked="checked" <?php  if(isset($data->jenis_kelamin)){if($data->jenis_kelamin == "L"){ echo 'checked="checked"';}} ?> type="radio" />Laki-laki</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4" style="padding-left: 0;">
                                        <div class="radio">
                                            <label><input name="jenis_kelamin" id="data1_34" value="P" <?php  if(isset($data->jenis_kelamin)){if($data->jenis_kelamin == "P"){ echo 'checked="checked"';}} ?> type="radio" />Perempuan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_4" class="col-sm-4 control-label">Tempat & Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data2_4" value="<?php echo isset($data->tempat_lahir)?$data->tempat_lahir:"" ?>" name=" tempat_lahir" placeholder=". . ." required/>
                                </div>
                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data2_5" name="tanggal_lahir" value="<?php echo isset($data->tanggal_lahir)?$data->tanggal_lahir:"" ?>" placeholder="dd/mm/yyyy"  required/>
                                </div>
                            </div>
                            <div id="stat_p" class="form-group">
                                <label for="data2_6" class="col-sm-4 control-label">Status Perkawinan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="statusP" name="status" style="width: 100%;" required>
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($data->status)){ if($data->status == 1 ){ echo "selected";}else{"";}} ?>>Menikah</option>
                                        <option value="2" <?php if(isset($data->status)){ if($data->status == 2 ){ echo "selected";}else{"";}} ?> >Belum Menikah</option>
                                    </select>
                                </div>
                            </div>
                            <div id="jml_ank" class="form-group">
                                <label for="data2_7" class="col-sm-4 control-label">Jumlah Anak</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="jumlah_anak" name="jumlah_anak" style="width: 100%;" >
                                        <option value=""></option>
                                        <option value="0" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 0 ){ echo "selected";}else{"";}} ?>>0</option>
                                        <option value="1" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 1 ){ echo "selected";}else{"";}} ?>>1</option>
                                        <option value="2" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 2 ){ echo "selected";}else{"";}} ?>>2</option>
                                        <option value="2" <?php if(isset($data->jumlah_anak)){ if($data->jumlah_anak == 3 ){ echo "selected";}else{"";}} ?> >3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data2_8" class="col-sm-4 control-label">Pekerjaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data2_8" name="id_pekerjaan" style="width: 100%;" required>
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
                                <button id="reset-btn3" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
               <?php //debugCode($data->cek_tab); ?>
                <div class="tab-pane <?php if($data->cek_tab == 2 ){ echo "active"; }else{ echo "";} ?>" id="tab1_3">
                    <form class="form-horizontal" method="POST" action="<?php echo base_url() ?>front/save_data_alamat/<?php echo $this->uri->segment(2);?>" style="margin-top: 20px;">
                        <input type="hidden" name="cek_tab" value="2">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="col-sm-12 text-right" style="margin: 10px 0px 20px 0px;">
                                    <span style="font-size: 12pt;">Alamat Sesuai KTP</span>
                                    <hr style="margin: 5px auto;" />
                                </div>

                                <input type="hidden" name="id[0]" value="<?php if($alamat1){ echo $alamat1->id; } ?>">
                                <input type="hidden" name="type_alamat[0]" value="1">


                                <div class="box-body" style="background-color: #f9f9f9;">
                                    <div id="param_alamatdiri" class="form-group">
                                        <label for="data3_1" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="alamat_1" name="alamat[0]" placeholder=". . ." required><?php if($alamat1){ echo $alamat1->alamat; } ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_2" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_negara" name="id_negara[0]" onchange="comboCPC('#user_negara','#user_province','ajax/getProvince')" style="width: 100%;">
                                                <option value=""></option>
                                                <?php
                                                    // debugCode($alamat1);
                                                    if(count($negara)>0){
                                                        foreach($negara as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat1->id_negara)?$alamat1->id_negara:"";
                                                            $s = ($r->id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->id."' $s >".$r->negara."</option>";
                                                        }
                                                    }  
                                                ?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_3" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_province" name="id_provinsi[0]" onchange="comboCPC('#user_province','#user_kota','ajax/getCity')"  style="width: 100%;">
                                                <option value=""></option>
                                                 <?php
                                                    // debugCode($alamat1);
                                                    if(count($provinsi)>0){
                                                        foreach($provinsi as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat1->id_provinsi)?$alamat1->id_provinsi:"";
                                                            $s = ($r->propinsi_id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->propinsi_id."' $s >".$r->title."</option>";
                                                        }
                                                    }  
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_4" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_kota" name="id_kota[0]" onchange="comboCPC('#user_kota','#user_kecamatan','ajax/getKecamatan')" style="width: 100%;">
                                                <option value=""></option>
                                                <?php
                                                    // debugCode($alamat1);
                                                    if(count($kota)>0){
                                                        foreach($kota as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat1->id_kota)?$alamat1->id_kota:"";
                                                            $s = ($r->kabupaten_id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->kabupaten_id."' $s >".$r->title."</option>";
                                                        }
                                                    }  
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_5" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_kecamatan" name="id_kecamatan[0]" style="width: 100%;">
                                                <option value=""></option>
                                                <?php
                                                    // debugCode($alamat1);
                                                    if(count($kecamatan)>0){
                                                        foreach($kecamatan as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat1->id_kecamatan)?$alamat1->id_kecamatan:"";
                                                            $s = ($r->kecamatan_id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->kecamatan_id."' $s >".$r->title."</option>";
                                                        }
                                                    }  
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_6" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="kodepos_1" name="nomer_pos[0]" value="<?php echo isset($alamat1->nomer_pos)?$alamat1->nomer_pos:""; ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_7" class="col-sm-5 control-label">Nomor Telepon Rumah</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="telepon_1" name="telepon[0]" value="<?php echo isset($alamat1->telepon)?$alamat1->telepon:""; ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', ' ()-', false)" />
                                            <input type="hidden" class="form-control" id="data3_8" name="telepon[1]" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_8" class="col-sm-5 control-label">Nomor Handphone</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_82" name="hp[0]" value="<?php echo isset($alamat1->hp)?$alamat1->hp:""; ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '+', false)" />
                                            <input type="hidden" class="form-control" id="data3_83" name="hp[1]" value="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_9" class="col-sm-5 control-label">Alamat Email</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="data3_9" name="email[0]" value="<?php echo isset($alamat1->email)?$alamat1->email:""; ?>" placeholder=". . ." />
                                            <input type="hidden" class="form-control" id="data3_92" name="email[1]" value="" placeholder=". . ." />
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
                                                    <input type="checkbox"  id="as_ktp" name="ktp" value="1" style="cursor: pointer;" />
                                                    
                                                </label>
                                            </div>
                                            <div style="font-size: 9pt;">** checklist apabila alamat anda sesuai dengan ktp</div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="id[1]" value="<?php if($alamat2){ echo $alamat2->id; } ?>">
                                    <input type="hidden" name="type_alamat[1]" value="2">
                                    <div class="form-group">
                                        <label for="data3_11" class="col-sm-5 control-label">Alamat Lengkap</label>
                                        <div class="col-sm-7">
                                            <textarea class="form-control" id="alamat_2" name="alamat[1]" value="" placeholder=". . ."><?php echo isset($alamat2->alamat)?$alamat2->alamat:""; ?></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="data3_2" class="col-sm-5 control-label">Negara</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_negara2" name="id_negara[1]" value="" onchange="comboCPC('#user_negara2','#user_province2','ajax/getProvince')" style="width: 100%;">
                                                <option value=""></option>
                                                <?php
                                                // debugCode($negara);
                                                    if(count($negara)>0){
                                                        foreach($negara as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat2->id_negara)?$alamat2->id_negara:"";
                                                            $s = ($r->id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->id."' $s >".$r->negara."</option>";
                                                        }
                                                    }  
                                                ?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_3" class="col-sm-5 control-label">Provinsi</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_province2" name="id_provinsi[1]" onchange="comboCPC('#user_province2','#user_kota2','ajax/getCity')"  style="width: 100%;">
                                                <option value=""></option>
                                                <?php
                                                    // debugCode($alamat1);
                                                    if(count($provinsi)>0){
                                                        foreach($provinsi as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat2->id_provinsi)?$alamat2->id_provinsi:"";
                                                            $s = ($r->propinsi_id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->propinsi_id."' $s >".$r->title."</option>";
                                                        }
                                                    }  
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_4" class="col-sm-5 control-label">Kota / Kabupaten</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_kota2" name="id_kota[1]" onchange="comboCPC('#user_kota2','#user_kecamatan2','ajax/getKecamatan')" style="width: 100%;">
                                                <option value=""></option>
                                                <?php
                                                    // debugCode($alamat1);
                                                    if(count($kota)>0){
                                                        foreach($kota as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat2->id_kota)?$alamat2->id_kota:"";
                                                            $s = ($r->kabupaten_id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->kabupaten_id."' $s >".$r->title."</option>";
                                                        }
                                                    }  
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="data3_5" class="col-sm-5 control-label">Kecamatan</label>
                                        <div class="col-sm-7">
                                            <select class="form-control select2" id="user_kecamatan2" name="id_kecamatan[1]" style="width: 100%;">
                                                <option value=""></option>
                                               <?php
                                                    // debugCode($alamat1);
                                                    if(count($kecamatan)>0){
                                                        foreach($kecamatan as $r){
                                                            // debugCode($r);
                                                            $t = isset($alamat2->id_kecamatan)?$alamat2->id_kecamatan:"";
                                                            $s = ($r->kecamatan_id==$t)?"selected='selected'":'';
                                                            echo "<option value='".$r->kecamatan_id."' $s >".$r->title."</option>";
                                                        }
                                                    }  
                                                ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="data3_16" class="col-sm-5 control-label">Kode Pos</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="kodepos_2" name="nomer_pos[1]" value="<?php echo isset($alamat2->nomer_pos)?$alamat2->nomer_pos:""; ?>" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)" />
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
                                        <button id="reset-btn1" type="button" class="btn btn-default">Reset</button>
                                    </div>
                                </div>
                                <!-- /.box-footer -->
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane <?php if($data->cek_tab == 3 ){ echo "active"; }else{ echo "";} ?>" id="tab1_4">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_riwayat_pendidikan/<?php echo $this->uri->segment(2);?>/<?php echo isset($pendidikan->id)?$pendidikan->id:""; ?>" style="margin-top: 20px;">
                         <input type="hidden" name="cek_tab" value="3">
                        <input type="hidden" name="FormXID" value="<?php echo isset($data->id)?$data->id:""; ?>">
                        <input type="hidden" name="id" value="<?php echo isset($pendidikan->id)?$pendidikan->id:""; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data4_1" class="col-sm-4 control-label">Sekolah Dasar (SD) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_1" value="<?php echo isset($pendidikan->sd)?$pendidikan->sd:""; ?>" name="sd" placeholder=". . ."  required/>
                                </div>
<!--                                <div class="col-sm-2">
                                    <input type="text" class="form-control" id="data4_2" name="data4_2" placeholder="Tahun Lulus ..." />
                                </div>-->
                            </div>
                            <div class="form-group">
                                <label for="data4_3" class="col-sm-4 control-label">Sekolah Menengah Pertama (SMP) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_3" value="<?php echo isset($pendidikan->smp)?$pendidikan->smp:""; ?>" name="smp" placeholder=". . ." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data4_5" class="col-sm-4 control-label">Sekolah Menengah Atas (SMA) / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_5" value="<?php echo isset($pendidikan->sma)?$pendidikan->sma:""; ?>" name="sma" placeholder=". . ." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data4_7" class="col-sm-4 control-label">Perguruan Tinggi / Sederajat</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data4_7" value="<?php echo isset($pendidikan->perguran_tinggi)?$pendidikan->perguran_tinggi:""; ?>" name="perguran_tinggi" placeholder=". . ." required/>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn4" type="button" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
                <div class="tab-pane <?php if($data->cek_tab == 4 ){ echo "active"; }else{ echo "";} ?>" id="tab1_5">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_riwayat_pekerjaan/<?php echo $this->uri->segment(2);?>/<?php echo isset($pekerjaan->id)?$pekerjaan->id:""; ?>" style="margin-top: 20px;">
                         <input type="hidden" name="cek_tab" value="4">
                        <input type="hidden" name="FormXID" value="<?php echo isset($data->id)?$data->id:""; ?>">
                         <input type="hidden" name="id" value="<?php echo isset($pekerjaan->id)?$pekerjaan->id:""; ?>">
                        <div class="box-body">
                            <div id="param_jabatan" class="form-group">
                                <label for="data5_1" class="col-sm-3 control-label">Nama Perusahaan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_12" value="<?php echo isset($pekerjaan->nama_perusahan)?$pekerjaan->nama_perusahan:""; ?>" name="nama_perusahan" placeholder=". . ."  required/>
                                </div>
                            </div> 
                            <div id="param_jabatan" class="form-group">
                                <label for="data5_1" class="col-sm-3 control-label">Jabatan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_123" value="<?php echo isset($pekerjaan->jabatan)?$pekerjaan->jabatan:""; ?>" name="jabatan" placeholder=". . ." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_2" class="col-sm-3 control-label">Jumlah Penghasilan per Bulan</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 10px;"><label><input  checked name="salary" value="1" <?php  if(isset($pekerjaan->salary)){if($pekerjaan->salary == "1"){ echo 'checked="checked"';}} ?> type="radio" />< 1 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="2" <?php  if(isset($pekerjaan->salary)){if($pekerjaan->salary == "2"){ echo 'checked="checked"';}} ?> type="radio" />1 Juta &nbsp;<&nbsp; 2,5 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="3" <?php  if(isset($pekerjaan->salary)){if($pekerjaan->salary == "3"){ echo 'checked="checked"';}} ?> type="radio" />2,5 Juta &nbsp;<&nbsp; 5 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="4" <?php  if(isset($pekerjaan->salary)){if($pekerjaan->salary == "4"){ echo 'checked="checked"';}} ?> type="radio" />5 Juta &nbsp;<&nbsp; 10 Juta</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="salary" value="5" <?php  if(isset($pekerjaan->salary)){if($pekerjaan->salary == "5"){ echo 'checked="checked"';}} ?> type="radio" />> 10 Juta</label></div>
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
                                    <textarea class="form-control" id="data5_3" name="alamat" value="<?php echo isset($pekerjaan->alamat)?$pekerjaan->alamat:""; ?>" placeholder=". . ." required><?php echo isset($pekerjaan->alamat)?$pekerjaan->alamat:""; ?></textarea>
                                </div>
                            </div>
                           
                            <div class="form-group">

                                <label for="data5_4" class="col-sm-3 control-label">Negara</label>

                                <div class="col-sm-4">
                                    <select class="form-control select2" id="user_negaraPK" name="id_negara" onchange="comboCPC('#user_negaraPK','#user_provincePK','ajax/getProvince')" style="width: 100%;">

                                        <option value=""></option>

                                        <?php

                                            // debugCode($alamat1);

                                            if(count($negara)>0){

                                                foreach($negara as $r){

                                                    // debugCode($r);

                                                    $t = isset($pekerjaan->id_negara)?$pekerjaan->id_negara:"";

                                                    $s = ($r->id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->id."' $s >".$r->negara."</option>";

                                                }

                                            }  

                                        ?>

                                       

                                    </select>
                                    

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="data5_5" class="col-sm-3 control-label">Provinsi</label>

                                <div class="col-sm-4">
                                    
                                     <select class="form-control select2" id="user_provincePK" name="id_provinsi" onchange="comboCPC('#user_provincePK','#user_kotaPK','ajax/getCity')"  style="width: 100%;">

                                        <option value=""></option>

                                         <?php

                                            // debugCode($alamat1);

                                            if(count($provinsi)>0){

                                                foreach($provinsi as $r){

                                                    // debugCode($r);

                                                    $t = isset($pekerjaan->id_provinsi)?$pekerjaan->id_provinsi:"";

                                                    $s = ($r->propinsi_id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->propinsi_id."' $s >".$r->title."</option>";

                                                }

                                            }  

                                        ?>

                                    </select>

                   

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="data5_6" class="col-sm-3 control-label">Kota / Kabupaten</label>

                                <div class="col-sm-4">
                                    <select class="form-control select2" id="user_kotaPK" name="id_kota" onchange="comboCPC('#user_kotaPK','#user_kecamatanPK','ajax/getKecamatan')" style="width: 100%;">

                                                <option value=""></option>

                                                <?php

                                                    // debugCode($alamat1);

                                                    if(count($kota)>0){

                                                        foreach($kota as $r){

                                                            // debugCode($r);

                                                            $t = isset($pekerjaan->id_kota)?$pekerjaan->id_kota:"";

                                                            $s = ($r->kabupaten_id==$t)?"selected='selected'":'';

                                                            echo "<option value='".$r->kabupaten_id."' $s >".$r->title."</option>";

                                                        }

                                                    }  

                                                ?>

                                            </select>
                                   

                                </div>

                            </div>

                            <div class="form-group">

                                <label for="data5_7" class="col-sm-3 control-label">Kecamatan</label>

                                <div class="col-sm-4">
                                    <select class="form-control select2" id="user_kecamatanPK" name="id_kecamatan" style="width: 100%;">

                                        <option value=""></option>

                                        <?php

                                            // debugCode($alamat1);

                                            if(count($kecamatan)>0){

                                                foreach($kecamatan as $r){

                                                    // debugCode($r);

                                                    $t = isset($pekerjaan->id_kecamatan)?$pekerjaan->id_kecamatan:"";

                                                    $s = ($r->kecamatan_id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->kecamatan_id."' $s >".$r->title."</option>";

                                                }

                                            }  

                                        ?>

                                    </select>
                                  

                                </div>

                            </div>

                            <div class="form-group">
                                <label for="data5_8" class="col-sm-3 control-label">Kode Pos</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_8" value="<?php echo isset($pekerjaan->kode_pos)?$pekerjaan->kode_pos:""; ?>" name="kode_pos" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', '', false)"  required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data5_9" class="col-sm-3 control-label">Nomor Telepon Tempat Bekerja</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data5_9" value="<?php echo isset($pekerjaan->telpon)?$pekerjaan->telpon:""; ?>" name="telpon" placeholder=". . ." onkeypress="return doFieldFilter(event, 'numeric', ' ()-', false)" required/>
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
                <div class="tab-pane <?php if($data->cek_tab == 5 ){ echo "active"; }else{ echo "";} ?>" id="tab1_6">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>front/save_permohonan_paspor/<?php echo $this->uri->segment(2);?>/<?php echo isset($mohon->id)?$mohon->id:""; ?>" style="margin-top: 20px;">
                          <input type="hidden" name="cek_tab" value="5">
                         <input type="hidden" name="FormXID" value="<?php echo isset($data->id)?$data->id:""; ?>">
                         <input type="hidden" name="id" value="<?php echo isset($mohon->id)?$mohon->id:""; ?>">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="data6_1" class="col-sm-4 control-label">Tujuan Perjalanan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_1" name="id_tujuan_perjalanan" style="width: 100%;" required>
                                        <option value=""></option>
                                        <?php 
                                            // debugCode($mohon);
                                            if(isset($mohon->id_tujuan_perjalanan)){
                                                if($mohon->id_tujuan_perjalanan == 1){
                                                    $pf1 = "selected=selected";
                                                    $pf2 ="";
                                                }else if($data->id_jenis_paspor == 2){
                                                    $pf1 = "";
                                                    $pf2 ="selected=selected";
                                                   
                                                }

                                            }else{
                                                $pf1 = "";
                                                $pf2 ="";
                                            }
                                            
                                        ?>
                                        <option value="1" <?php echo $pf1; ?>>Wisata</option>
                                        <option value="2"  <?php echo $pf2; ?>>Sekolah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_2" class="col-sm-4 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_2" name="negara_tujuan" style="width: 100%;" required>
                                        <option value=""></option>
                                        <?php
                                            if(count($negara)>0){
                                                foreach($negara as $r){
                                                    $t = isset($mohon->negara_tujuan)?$mohon->negara_tujuan:"";

                                                    $s = ($r->id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->id."' $s >".$r->negara."</option>";
                                                }

                                            }  

                                        ?>

                                       
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_3" class="col-sm-4 control-label">Berapa Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_3" value="<?php echo isset($mohon->berapa_lama_perjalanan)?$mohon->berapa_lama_perjalanan:""; ?>" name="berapa_lama_perjalanan" placeholder=". . ."  required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_4" class="col-sm-4 control-label">Tanggungan Biaya Perjalanan Luar Negeri</label>
                                <div class="col-sm-6">
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if(isset($mohon)){if($mohon->tanggungan_biaya == "1"){ echo 'checked="checked"';}} ?> value="1" type="radio" checked />Biaya Sendiri</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if(isset($mohon)){if($mohon->tanggungan_biaya == "2"){ echo 'checked="checked"';}} ?> value="2" type="radio" />Biaya Dinas</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if(isset($mohon)){if($mohon->tanggungan_biaya == "3"){ echo 'checked="checked"';}} ?> value="3" type="radio" />Biaya Penjamin</label></div>
                                    <div class="radio" style="margin-bottom: 10px;"><label><input name="tanggungan_biaya" <?php  if(isset($mohon)){if($mohon->tanggungan_biaya == "4"){ echo 'checked="checked"';}} ?> value="4" type="radio" />Biaya Pengundang</label></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_5" class="col-sm-4 control-label">Pernah Keluar Negeri</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="pernah_keluar_negri" name="pernah_keluar_negri" style="width: 100%;" required>
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($mohon->pernah_keluar_negri)){ if($mohon->pernah_keluar_negri == 1){ echo "selected"; }else{"";}} ?>>Ya</option>
                                        <option value="0" <?php if(isset($mohon->pernah_keluar_negri)){ if($mohon->pernah_keluar_negri == 0){ echo "selected"; }else{"";}} ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_6" class="col-sm-4 control-label">Negara</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_6" name="negara_pernah" style="width: 100%;" required>
                                        <option value=""></option>
                                        <?php
                                            if(count($negara)>0){
                                                foreach($negara as $r){
                                                    $t = isset($mohon->negara_pernah)?$mohon->negara_pernah:"";

                                                    $s = ($r->id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->id."' $s >".$r->negara."</option>";
                                                }

                                            }  

                                        ?>

                                       
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_7" class="col-sm-4 control-label">Berapa Lama</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="bearpa_lama" value="<?php echo isset($mohon->bearpa_lama)?$mohon->bearpa_lama:""; ?>" name="bearpa_lama" placeholder=". . ."  required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_8" class="col-sm-4 control-label">Tujuan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="tujuan" value="<?php echo isset($mohon->tujuan)?$mohon->tujuan:""; ?>" name="tujuan" placeholder=". . ."  required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_9" class="col-sm-4 control-label">Pernah Bekerja Di Luar Negeri</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_9" name="pernah_bekerja_luar_negri" style="width: 100%;" required>
                                        <option value=""></option>
                                         <?php
                                            if(count($negara)>0){
                                                foreach($negara as $r){
                                                    $t = isset($mohon->pernah_bekerja_luar_negri)?$mohon->pernah_bekerja_luar_negri:"";

                                                    $s = ($r->id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->id."' $s >".$r->negara."</option>";
                                                }

                                            }  

                                        ?>
                                       
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
                                    <select class="form-control select2" id="data6_10" name="memiliki_paspor_negara_lain" style="width: 100%;" required>
                                        <option value=""></option>
                                        <option value="1" <?php if(isset($mohon->memiliki_paspor_negara_lain)){ if($mohon->memiliki_paspor_negara_lain == 1){ echo "selected"; }else{"";}} ?>>Ya</option>
                                        <option value="0" <?php if(isset($mohon->memiliki_paspor_negara_lain)){ if($mohon->memiliki_paspor_negara_lain == 0){ echo "selected"; }else{"";}} ?>>Tidak</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_11" class="col-sm-4 control-label">Kebangsaan</label>
                                <div class="col-sm-4">
                                    <select class="form-control select2" id="data6_11" name="id_kebangsaan" style="width: 100%;" required>
                                        <option value=""></option>
                                         <?php
                                            if(count($negara)>0){
                                                foreach($negara as $r){
                                                    $t = isset($mohon->id_kebangsaan)?$mohon->id_kebangsaan:"";

                                                    $s = ($r->id==$t)?"selected='selected'":'';

                                                    echo "<option value='".$r->id."' $s >".$r->negara."</option>";
                                                }

                                            }  

                                        ?>
                                       
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_12" class="col-sm-4 control-label">Nomor Paspor</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_12" value="<?php echo isset($mohon->nomer_paspor)?$mohon->nomer_paspor:""; ?>" name="nomer_paspor" placeholder=". . ." required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_13" class="col-sm-4 control-label">Tanggal Penerbitan</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_13" value="<?php echo isset($mohon->tanggal_penerbitan)?$mohon->tanggal_penerbitan:""; ?>" name="tanggal_penerbitan" placeholder="dd/mm/yyyy" readonly required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="data6_14" class="col-sm-4 control-label">Tanggal Habis Berlaku</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="data6_14" value="<?php echo isset($mohon->tanggal_berlaku)?$mohon->tanggal_berlaku:""; ?>" name="tanggal_berlaku" placeholder="dd/mm/yyyy" readonly required/>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="box-footer">
                            <div class="col-sm-offset-4 col-sm-8">
                                <button type="submit" class="btn bg-green">Simpan</button>
                                <button id="reset-btn2" type="button" class="btn btn-default">Reset</button>
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


<script type="text/javascript">
    
</script>
