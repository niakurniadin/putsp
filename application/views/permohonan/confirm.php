<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Detail Permohonan Pengolahan Data</h3>
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
                <td><?= $confirm->nama ?></td>
              </tr>
              <tr>
                <td>Email</td>
                <td>:</td>
                <td><?= $confirm->email ?></td>
              </tr>
              <tr>
                <td>Telp / WA</td>
                <td>:</td>
                <td><?= $confirm->tlpwa ?></td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?= $confirm->alamat ?></td>
              </tr>
              <tr>
                <td>Nama Perusahaan</td>
                <td>:</td>
                <td><?= $confirm->perusahaan ?></td>
              </tr>
              <tr>
                <td>Data</td>
                <td>:</td>
                <td><a href="<?=base_url()?>upload/<?= $confirm->rawdata ?>" class="btn btn-sm btn-success"><?= $confirm->rawdata ?></a></td>
              </tr>
              <tr>
                <td>Jenis Data</td>
                <td>:</td>
                <td><?= $confirm->jenis ?></td>
              </tr>
              <tr>
                <td>Catatan Penting</td>
                <td>:</td>
                <td><?= $confirm->catatan ?></td>
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
      </div>

    </div><!-- Content row -->
  </div><!-- Container end -->
</section><!-- Main container end -->




