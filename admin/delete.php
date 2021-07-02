<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$result = mysqli_query($db , "DELETE FROM berita WHERE id=$id");
 
echo "<script>alert('Berita berhasil dihapus');window.location='./'</script>";
?>
