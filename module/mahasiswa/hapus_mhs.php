<?php
require "../../config/function.php";

$id = $_GET["id"];

if (hapus_mhs($id) > 0) {
    echo "<script>
    alert('data berhasil dihapus!');
    document.location.href = 'index.php';
    </script>";
} else {
    echo "<script>
    alert('data gagal dihapus!');
    document.location.href = 'index.php';
    </script>";
}
