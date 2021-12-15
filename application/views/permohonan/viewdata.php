
<section id="main-container" class="main-container">
  <div class="container">
    <h3>Daftar Ajuan Pengolahan Data</h3>
    <table class="table table-striped table-bordered" id="oedjang">
      <thead class="text-center">
        <tr>
          <th>No</th>
          <th>No Registrasi</th>
          <th>Nama Pengusul</th>
          <th>Email</th>
          <th>Telp / WA</th>
          <!-- <th>Alamat</th>
          <th>Nama Perusahaan</th>
          <th>Data Mentah</th> -->
          <th>Jenis Data</th>
          <!-- <th>Data Terproses</th> -->
          <th>Catatan</th>
          <th>Status</th>
          <th>Tgl Ajuan</th>
          <!-- <th>Tgl Proses</th>
          <th>Tgl Selesai</th> -->
        </tr>
      </thead>
      <tbody>
        <?php $no = 1;
        foreach ($permohonan as $key => $value) { ?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $value->noreg ?></td>
            <td><?= $value->nama ?></td>
            <td><?= $value->email ?></td>
            <td><?= $value->tlpwa ?></td>
            <!-- <td><?= $value->alamat ?></td>
            <td><?= $value->perusahaan ?></td>
            <td><a href="<?=base_url()?>upload/<?= $value->rawdata ?>" class="btn btn-sm btn-success"><?= $value->rawdata ?></a></td> -->
            <td><?= $value->jenis ?></td>
            <!-- <td><?= $value->dataolah ?></td> -->
            <td><?= $value->catatan ?></td>
            <td><?= $value->status ?></td>
            <td><?= $value->tgl_ajuan ?></td>
            <!-- <td><?= $value->tgl_proses ?></td>
            <td><?= $value->tgl_selesai ?></td> -->
            <td class="text_center">
              <a href="#" class="btn btn-sm btn-success"><i class="fas fa-edit"></i></a>
            </td>
          </tr>
        <?php } ?>
      </tbody>

    </table>
  </div>

  
</section>
<script>
    $(document).ready(function() {
      $('#oedjang').DataTable( {
        dom:'Bfrtip',
        button:[
          'copy','csv','excel','pdf','print'
        ]
      });
    });
  </script>