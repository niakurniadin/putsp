<section id="main-container" class="main-container">
  <div class="container">
  <div class="row">
  <div class="col-md-12">
    <?php
      if ($noreg == '') {
        echo form_open_multipart("permohonan/status") ?>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Kode Registrasi :</label>
                <input class="form-control form-control-name" name="noreg" id="noreg" placeholder="Masukkan Kode Registrasi" type="text" required>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit" name="simpan" id="simpan"><i class="fa fa-paper-plane fa-fw"></i> Cek Status</button>
              </div>
            </div>
          </div>
        <?php echo form_close();
        
      } else { ?>


        
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <h3 class="card-header">Status Pengolahan Data</h3>
              <div class="card-body">
                <h4>Data Pemohon</h4>

              <table class="table table-striped table-bordered" id="oedjang">
                <tr>
                  <td style="width: 30%">Kode Registrasi</td>
                  <td style="width: 5%">:</td>
                  <td style="font-weight: bold"><?= $noreg ?></td>
                </tr>
                <tr>
                  <td>Nama Pemohon</td>
                  <td>:</td>
                  <td><?= $status->nama ?></td>
                </tr>
                <tr>
                  <td>Email</td>
                  <td>:</td>
                  <td><?= $status->email ?></td>
                </tr>
                <tr>
                  <td>Telp / WA</td>
                  <td>:</td>
                  <td><?= $status->tlpwa ?></td>
                </tr>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td><?= $status->alamat ?></td>
                </tr>
                <tr>
                  <td>Nama Perusahaan</td>
                  <td>:</td>
                  <td><?= $status->perusahaan ?></td>
                </tr>
                <tr>
                  <td>Jenis Data</td>
                  <td>:</td>
                  <td><?= $status->jenis ?></td>
                </tr>
                <tr>
                  <td>Catatan Penting</td>
                  <td>:</td>
                  <td><?= $status->catatan ?></td>
                </tr>
                <tr>
                  <td>Status</td>
                  <td>:</td>
                  <td>
                    <?php
                      if ($status->status == "Ajuan") { ?>
                        <a class="btn btn-sm btn-warning"> Ajuan</a>
                        <?php                      
                      } elseif ($status->status == "Proses") { ?>
                        <a class="btn btn-sm btn-info"> Proses</a>
                        <?php
                      } elseif ($status->status == "Selesai") { ?>
                        <a class="btn btn-sm btn-success"> Proses</a>
                        <?php
                      }                      
                      ?>
                  </td>
                </tr>
                <tr>
                  <td>Tanggal Ajuan</td>
                  <td>:</td>
                  <td><?= $status->tgl_ajuan ?></td>
                </tr>
                <tr>
                  <td>Tanggal Proses</td>
                  <td>:</td>
                  <td><?= $status->tgl_proses ?></td>
                </tr>
                <tr>
                  <td>Tanggal Selesai</td>
                  <td>:</td>
                  <td><?= $status->tgl_selesai ?></td>
                </tr>
              </table>
            
            <hr>
              <h4 class="card-title">File</h4>
              <table class="table table-striped table-bordered" id="oedjang">
                <tr>
                  <th>No</th>
                  <th>Status Pengolahan Data</td>
                  <th>Dokumen/Data</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Data Mentah / RAW Data dari Pemohon</td>
                  <td>
                    <?php
                      if ($status->rawdata == '') {
                        
                      } else { ?>
                        <a href="<?=base_url()?>upload/<?= $status->rawdata ?>" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</a>
                      <?php }                      
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Data Hasil Olahan</td>
                  <td>
                    <?php
                      if ($status->dataolah == '') {
                        
                      } else { ?>
                        <a href="<?=base_url()?>upload/<?= $status->dataolah ?>" class="btn btn-sm btn-success"><i class="fa fa-download"></i> Download</a>
                      <?php }                      
                    ?>
                  </td>
                </tr>
                
              </table>
                
            </div>

          </div>
          
        </div>



        
      <?php
      }
    ?>


  </div>
  </div>
  </div>
</section>
