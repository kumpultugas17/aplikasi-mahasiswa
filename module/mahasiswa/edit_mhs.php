<?php 
$page_title = 'Form Edit Data Mahasiswa';
include '../layout/_layout_header.php';
$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id='$id'")[0];
$jurusanAll = $koneksi->query("SELECT * FROM jurusan");
?>

<div class="container">
   <div class="row">
      <div class="col-lg-12">

         <div class="card mt-5">
            <div class="card-header">
               Form Tambah Data
            </div>
            <div class="card-body">
               <?php
               if (isset($_POST["edit"])) {
                  if (edit_mhs($_POST) > 0) {
                     echo '
                     <div class="alert alert-success">
                     <strong>Data Siswa</strong> berhasil diupdate!
                     </div>';
                  } else {
                     echo '
                     <div class="alert alert-danger">
                     <strong>Data Siswa</strong> gagal diupdate!
                     </div>';
                  }
               }
               ?>
               <form action="" method="POST">
                  <input type="hidden" value="<?= $mhs['id'] ?>" name="id">
                  <div class="form-group">
                     <label for="nim">Nim</label>
                     <input type="text" class="form-control form-control-sm" id="nim" name="nim" value="<?= $mhs['nim'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="nama">Nama lengkap</label>
                     <input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= $mhs['nama'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="nim">Agama</label>
                     <select class="form-control form-control-sm" name="agama">
                        <option disabled selected>Pilih agama</option>
                        <?php $agamaAll = array('Islam', 'Protestan', 'Khatolik', 'Hindu', 'Budha', 'Konghuchu') ?>
                        <?php foreach ($agamaAll as $agama) : ?>
                           <option value="<?= $agama; ?>" <?php echo $agama == $mhs['agama'] ? 'selected' : '' ?>><?= $agama; ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label>Jenis Kelamin</label><br>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki" value="L" <?= $mhs['jenis_kelamin'] == 'L' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="laki">Laki-laki</label>
                     </div>
                     <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="bini" value="P" <?= $mhs['jenis_kelamin'] == 'P' ? 'checked' : '' ?>>
                        <label class="form-check-label" for="bini">Perempuan</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="nim">Jurusan</label>
                     <select class="form-control form-control-sm" name="jurusan">
                        <option disabled selected>Pilih Jurusan</option>
                        <?php foreach ($jurusanAll as $jurusan) : ?>
                           <option value="<?= $jurusan['id']; ?>" <?php echo $jurusan['id'] == $mhs['jurusan_id'] ? 'selected' : '' ?>><?= $jurusan['nama_jurusan']; ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="ayah">Nama Ayah</label>
                     <input type="text" class="form-control form-control-sm" id="ayah" name="nama_ayah" value="<?= $mhs['nama_ayah'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="ayah">Nama Ibu</label>
                     <input type="text" class="form-control form-control-sm" id="ibu" name="nama_ibu" value="<?= $mhs['nama_ibu'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="alamat">Alamat</label>
                     <textarea class="form-control form-control-sm" name="alamat" id="alamat" cols="30" rows="5"><?= $mhs['alamat'] ?></textarea>
                  </div>
                  <div class="form-group">
                     <label for="hp">Asal Sekolah</label>
                     <input type="text" class="form-control form-control-sm" id="hp" name="asal_sekolah" value="<?= $mhs['asal_sekolah'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="hp">Nomor Handphone</label>
                     <input type="number" class="form-control form-control-sm" id="hp" name="no_hp" value="<?= $mhs['no_hp'] ?>">
                  </div>
                  <div class="form-group">
                     <label for="hp_ortu">Nomor Hanphone Orangtua</label>
                     <input type="number" class="form-control form-control-sm" id="hp_ortu" name="no_hp_ortu" value="<?= $mhs['no_hp_ortu'] ?>">
                  </div>
                  <button type="submit" name="edit" class="btn btn-sm btn-warning">Edit</button>
                  <a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include '../layout/_layout_footer.php'; ?>