<?php include '../layout/_layout_header.php'; ?>
<?php $jurusanAll = $koneksi->query("SELECT * FROM jurusan"); ?>

<div class="container">
   <div class="row">
      <div class="col-lg-12">

         <div class="card mt-5">
            <div class="card-header">
               Form Tambah Data
            </div>
            <div class="card-body">
               <form action="" method="POST">
                  <div class="form-group">
                     <label for="nim">Nim</label>
                     <input type="text" class="form-control form-control-sm" id="nim" placeholder="Masukkan NIM Mahasiswa">
                  </div>
                  <div class="form-group">
                     <label for="nama">Nama lengkap</label>
                     <input type="text" class="form-control form-control-sm" id="nama" placeholder="Masukkan Nama Mahasiswa">
                  </div>
                  <div class="form-group">
                     <label for="nim">Agama</label>
                     <select class="form-control form-control-sm">
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
                     <select class="form-control form-control-sm">
                        <option disabled selected>Pilih agama</option>
                        <?php foreach ($jurusanAll as $jurusan) : ?>
                           <option value="<?= $jurusan['id']; ?>"><?= $jurusan['nama_jurusan']; ?></option>
                        <?php endforeach ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="ayah">Nama Ayah</label>
                     <input type="text" class="form-control form-control-sm" id="ayah" placeholder="Masukkan Nama Ayah">
                  </div>
                  <div class="form-group">
                     <label for="ayah">Nama Ibu</label>
                     <input type="text" class="form-control form-control-sm" id="ibu" placeholder="Masukkan Nama Ibu">
                  </div>
                  <div class="form-group">
                     <label for="alamat">Alamat</label>
                     <textarea class="form-control form-control-sm" name="alamat" id="alamat" cols="30" rows="5"></textarea>
                  </div>
                  <div class="form-group">
                     <label for="hp">Nomor Handphone</label>
                     <input type="number" class="form-control form-control-sm" id="hp" placeholder="Masukkan Nomormu">
                  </div>
                  <div class="form-group">
                     <label for="hp_ortu">Nomor Hanphone Orangtua</label>
                     <input type="number" class="form-control form-control-sm" id="hp_ortu" placeholder="Masukkan Handphone Orangtua">
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php include '../layout/_layout_footer.php'; ?>