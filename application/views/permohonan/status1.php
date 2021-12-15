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


        <h3 class="column-title">Status Pengolahan Data</h3>
        <div class="row">
          <div class="col-md-8">
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
                <td>Data</td>
                <td>:</td>
                <td><a href="<?=base_url()?>upload/<?= $status->rawdata ?>" class="btn btn-sm btn-success"><?= $status->rawdata ?></a></td>
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
            </table>
          </div>

          <div class="col-md-4">
            <h4 style="text-align: center">Penting!</h4>
            <h5 style="text-align: justify">
            Harap dicatat/disimpan baik-baik Kode Registrasi Anda untuk pengecekan Status Ajuan Anda.
            <br>Cek Status Ajuan Anda melalui menu "PERMOHONAN -> STATUS PERMOHONAN", kemudian masukkan Kode Registrasi.
            </h5>
            <br><br>
            <h5 style="text-align: center">Kode Registrasi Anda : <br><?= $noreg ?></h5>
            <br><br>
            <div class="text-right"><br>
              <a href="<?=base_url()?>permohonan/status/<?= $noreg ?>" class="btn btn-primary solid blank" target="blank"><i class="fa fa-paper-plane fa-fw"></i> Cek Status Permohonan</a>
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
