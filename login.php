<?php
    session_start();
    include 'config/koneksi.php';
    
    if(isset($_POST['lgn'])){
        $a = mysqli_query($db, "SELECT * FROM user WHERE username = '". $_POST['username'] ."' AND password = '". $_POST['password'] ."'");
        $admin = mysqli_fetch_array($a);

        if($admin > 0){
            $_SESSION['admin'] = $admin['username'];
            echo "<script>alert('Login Berhasil');window.location='admin/';</script>";
        }else{
            echo "<script>alert('Login Gagal');window.location='./';</script>";
        }
    }
?>