<?php
    include '../config/koneksi.php';
     if(isset($_POST['edit'])){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
        $id = $_GET['id'];

        move_uploaded_file($source, '../img/'.$file);

        
        if($file){
            $g = mysqli_query($db, "UPDATE berita set judul='$judul', keterangan='$isi', gambar='$file' WHERE id='$id'");
            if($g){
                echo "<script>alert('Data Berhasil Di Edit');window.location='./'</script>";
            }else{
                echo "<script>alert('Data Gagal Di Edit');window.location='./'</script>";
            }
        }else{
            $berita = mysqli_query($db, "UPDATE berita set judul='$judul', keterangan='$isi' WHERE id='$id'");
            if($berita){
                echo "<script>alert('Data Berhasil Di Edit');window.location='./'</script>";
            }else{
                echo "<script>alert('Data Gagal Di Edit');window.location='./'</script>";
            }
        }
    }
        
?>