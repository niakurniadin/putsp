
<section id="main-container" class="main-container">
  <div class="container">
  <div class="row">
      <div class="col-md-12">
        <h3 class="column-title">Form Permohonan Pengolahan Data</h3>
        <!-- contact form works with formspree.io  -->
        <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->

        <!-- <form id="contact-form" action="#" method="post" role="form" enctype="multipart/form-data"> -->
        <?php echo form_open_multipart('permohonan/ajukan') ?>
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-4">
              <!-- <div class="form-group">
                <label>No Reg *</label>
                <input class="form-control form-control-name" name="noreg" id="noreg" value="<?= $random; ?>" disabled required>
              </div> -->
              <div class="form-group">
                <label>Nama *</label>
                <input class="form-control form-control-name" name="nama" id="nama" placeholder="Nama Pemohon" type="text" required>
              </div>
              <div class="form-group">
                <label>Email *</label>
                <input class="form-control form-control-email" name="email" id="email" placeholder="Email Pemohon" type="email"
                required>
              </div>
              <div class="form-group">
                <label>Telpon/WA *</label>
                <input class="form-control" name="tlpwa" id="tlpwa" placeholder="No Telpon / WA" type="text" required>
              </div>
              <div class="form-group">
                <label>Alamat *</label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat Pemohon" rows="5"
                required></textarea>
              </div>
              <div class="form-group">
                <label>Nama Perusahaan</label>
                <input class="form-control form-control-name" name="perusahaan" id="perusahaan" placeholder="Nama Perusahaan" type="text">
              </div>
            </div>

            <div class="col-md-8">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="varchar">Data (format *.zip)</label>
                    <input class="form-control" name="rawdata" id="rawdata" placeholder="Pilih Data" type="file" accept=".zip">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Jenis Data</label>
                    <select class="form-control" name="jenis" id="jenis" required>
                      <option value="">== Pilih Jenis Data ==</option>
                      <option value="Total Station">Total Station</option>
                      <option value="GPS Geodetik">GPS Geodetik</option>
                      <option value="Foto Udara">Foto Udara</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>
                  </div>              
                </div>
              </div>
              <div class="form-group">
                <label>Catatan Penting *</label>
                <textarea class="form-control form-control-message" name="catatan" id="catatan" placeholder="Tuliskan jenis pengolahan data serta keterangan lainnya untuk memperjelas proses permohonan. Jika File Data sangat besar, bisa diupload ke google drive, kemudian linknya disertkan di Catatan" rows="10"
                  required></textarea>
              </div>
              <div class="text-right"><br>
                <button class="btn btn-primary solid blank" type="submit"><i class="fa fa-paper-plane fa-fw"></i> Kirim Permohonan</button>
              </div>
            </div>

          </div>        
        <?php echo form_close() ?>  
        <!-- </form> -->
      </div>

    </div><!-- Content row -->

  </div><!-- Container end -->
</section><!-- Main container end -->

