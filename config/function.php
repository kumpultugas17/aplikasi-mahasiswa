<?php 
include 'koneksi.php';

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_mhs($data_mhs) {
    global $koneksi;

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $jurusan = $_POST['jurusan'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $alamat = $_POST['alamat'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $no_hp = $_POST['no_hp'];
    $no_hp_ortu = $_POST['no_hp_ortu'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('', '$nim', '$nama', '$agama', '$jenis_kelamin', '$jurusan', '$nama_ayah', '$nama_ibu', '$alamat', '$asal_sekolah', '$no_hp', '$no_hp_ortu')");
    return mysqli_affected_rows($koneksi);
}

function edit_mhs($data_mhs)
{
    global $koneksi;

    $id = $data_mhs['id'];
    $nama = htmlspecialchars($data_mhs['nama']);
    $agama = htmlspecialchars($data_mhs['agama']);
    $jenis_kelamin = htmlspecialchars($data_mhs['jenis_kelamin']);
    $jurusan = $data_mhs['jurusan'];
    $nama_ayah = htmlspecialchars($data_mhs['nama_ayah']);
    $nama_ibu = htmlspecialchars($data_mhs['nama_ibu']);
    $alamat = htmlspecialchars($data_mhs['alamat']);
    $asal_sekolah = htmlspecialchars($data_mhs['asal_sekolah']);
    $no_hp = htmlspecialchars($data_mhs['no_hp']);
    $no_hp_ortu = htmlspecialchars($data_mhs['no_hp_ortu']);

    mysqli_query($koneksi, "UPDATE mahasiswa SET nama = '$nama', agama = '$agama', jenis_kelamin='$jenis_kelamin', jurusan_id='$jurusan', nama_ayah='$nama_ayah', nama_ibu='$nama_ibu', alamat='$alamat', asal_sekolah='$asal_sekolah', no_hp='$no_hp', no_hp_ortu='$no_hp_ortu' WHERE id='$id'");

    return mysqli_affected_rows($koneksi);
}

function hapus_mhs($id)
{
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id=$id");
    return mysqli_affected_rows($koneksi);
}
?>