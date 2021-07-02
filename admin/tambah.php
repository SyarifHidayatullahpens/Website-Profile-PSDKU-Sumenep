<?php
    include '../config/koneksi.php';
     if(isset($_POST['save'])){
         $judul = $_POST['judul'];
         $isi = $_POST['isi'];
         $file = $_FILES['gambar']['name'];
         $source = $_FILES['gambar']['tmp_name'];
         $id = rand(1, 10) . rand(1, 10);

         move_uploaded_file($source, '../img/'.$file);

         if(!$judul || !$isi){
            echo "<script>alert('Data belum Di Isi Dengan Lengkap');window.location='./'</script>";            
         }else if($file){
            $g = mysqli_query($db, "INSERT INTO berita VALUES ('$id', '$judul', '$isi', '$file')");
            
            if($g){
                echo "<script>alert('Data Berhasil Di Simpan');window.location='./'</script>";
            }else{
                echo "<script>alert('Data Gagal Di Simpan');window.location='./'</script>";
            }
         }else{
            echo "<script>alert('Please Select the Image');window.location='./'</script>";
         }
     }
  
?>