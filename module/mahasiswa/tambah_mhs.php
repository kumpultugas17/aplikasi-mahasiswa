<?php $page_title = 'Form Tambah Data Mahasiswa'; ?>
<?php include '../layout/_layout_header.php'; ?>
<?php $jurusanAll = $koneksi->query("SELECT * FROM jurusan"); ?>

<?php 
if (isset($_POST['simpan'])) {
   if (tambah_mhs($_POST) > 0) { 
      $error = true;
   } else {
      echo mysqli_error($koneksi);
   }
}
?>

<div class="container">
   <div class="row">
      <div class="col-lg-12">

         <div class="card mt-5">
            <div class="card-header">
               Form Tambah Data
            </div>
            <div class="card-body">
               <?php if (isset($error)) : ?>
                  <div class="alert alert-success">Berhasil Menambahkan Data!</div>
               <?php endif; ?>
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="nim">Nim</label>
                     <input type="text" class="form-control form-control-sm" id="nim" name="nim" placeholder="Masukkan NIM Mahasiswa">
                  </div>
                  <div class="form-group">
                     <label for="nama">Nama lengkap</label>
                     <input type="text" class="form-control form-control-sm" id="nama" name="nama" placeholder="Masukkan Nama Mahasiswa">
                  </div>
                  <div class="form-group">
                     <label for="nim">Agama</label>
                     <select class="form-control form-control-sm" name="agama">
                        <option disabled selected>Pilih agama</option>
                        <?php $agamaAll = array('Islam', 'Protestan', 'Khatolik', 'Hindu', 'Budha', 'Konghuchu') ?>
                        <?php foreach ($agamaAll as $agama) : ?>
                           <option value="<?= $agama; ?>"><?= $agama; ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Jenis Kelamin</label><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L">
                        <label class="form-check-label" for="laki">Laki-laki</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="bini" value="P">
                        <label class="form-check-label" for="bini">Perempuan</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="nim">Jurusan</label>
                     <select class="form-control form-control-sm" name="jurusan">
                        <option disabled selected>Pilih agama</option>
                        <?php foreach ($jurusanAll as $jurusan) : ?>
                           <option value="<?= $jurusan['id']; ?>"><?= $jurusan['nama_jurusan']; ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="ayah">Nama Ayah</label>
                     <input type="text" class="form-control form-control-sm" id="ayah" name="nama_ayah" placeholder="Masukkan Nama Ayah">
                  </div>
                  <div class="form-group">
                     <label for="ayah">Nama Ibu</label>
                     <input type="text" class="form-control form-control-sm" id="ibu" name="nama_ibu" placeholder="Masukkan Nama Ibu">
                  </div>
                  <div class="form-group">
                     <label for="alamat">Alamat</label>
                     <textarea class="form-control form-control-sm" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="hp">Asal Sekolah</label>
                     <input type="text" class="form-control form-control-sm" id="hp" name="asal_sekolah" placeholder="Masukkan Asal">
                  </div>
                  <div class="form-group">
                     <label for="hp">Nomor Handphone</label>
                     <input type="number" class="form-control form-control-sm" id="hp" name="no_hp" placeholder="Masukkan Nomormu">
                  </div>
                  <div class="form-group">
                     <label for="hp_ortu">Nomor Hanphone Orangtua</label>
                     <input type="number" class="form-control form-control-sm" id="hp_ortu" name="no_hp_ortu" placeholder="Masukkan Handphone Orangtua">
                  </div>
                  <button type="submit" name="simpan" class="btn btn-sm btn-primary">Simpan</button>
                  <a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include '../layout/_layout_footer.php'; ?>