<?php include '../layout/_layout_header.php'; ?>
<?php $result = $koneksi->query("
   SELECT mahasiswa.nim, 
   mahasiswa.nama, mahasiswa.agama,
   mahasiswa.jenis_kelamin, jurusan.nama_jurusan,
   mahasiswa.asal_sekolah, mahasiswa.no_hp 
   FROM mahasiswa INNER JOIN 
   jurusan ON mahasiswa.jurusan_id = jurusan.id");?>

<div class="container">
   <div class="row">
      <div class="col-lg-12">

         <div class="card mt-5">
            <div class="card-header">
               Data Mahasiswa
            </div>
            <div class="card-body">
               <table class="table table-bordered table-hove table-sm">
                  <thead>
                     <tr class="text-center">
                        <th>No</th>
                        <th>Nim</th>
                        <th>Nama</th>
                        <th>Agama</th>
                        <th>Jenis Kelamin</th>
                        <th>Jurusan</th>
                        <th>Asal Sekolah</th>
                        <th>No. Handphone</th>
                        <th>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $no = 1; ?>
                     <?php foreach ($result as $row) : ?>
                        <tr>
                           <td class="text-center"><?= $no++; ?></td>
                           <td><?= $row['nim']; ?></td>
                           <td><?= $row['nama']; ?></td>
                           <td><?= $row['agama']; ?></td>
                           <td><?= $row['jenis_kelamin']; ?></td>
                           <td><?= $row['nama_jurusan']; ?></td>
                           <td><?= $row['asal_sekolah']; ?></td>
                           <td><?= $row['no_hp']; ?></td>
                        </tr>
                     <?php endforeach; ?>
                  </tbody>
               </table>
               <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
         </div>

      </div>
   </div>
</div>

<?php include '../layout/_layout_footer.php'; ?>