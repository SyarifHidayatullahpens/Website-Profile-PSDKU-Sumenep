<?php
  session_start();
  session_destroy();
  include 'config/koneksi.php';
  $mysqlll = mysqli_query($db, "SELECT * FROM berita");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>PROFILE PENS PSDKU SUMENEP</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">

  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
    <img src="img/pens.png" width=" 60px" height="60px" style="margin-right: 1px; float:left; margin-top:15px">
      <a href="#"><em>PENS</em> PSDKU </a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1" >Home</a></li>
       
          <!-- <li><a href="#section5">Video</a></li> -->
          <!-- <li><a href="#section6">Contact</a></li> -->
          <li><a href="#tentang">Tentang Kampus</a></li>
          <li class="has-submenu"><a href="#">Departemen</a>
            <ul class="sub-menu">
              <li><a href="#ti" style="display: block; text-align:center">Departemen Teknik Informatika dan Komputer</a></li>
              <li><a href="#mmb" style="display: block; text-align:center">Departemen Multimedia Kreatif</a>></li>
            </ul>
          </li>
          <li class="has-submenu"><a href="#section3">Diploma3</a>
            <ul class="sub-menu">
              <li><a href="#d3ti" style="display: block; text-align:center">Teknik Informatika</a></li>
              <li><a href="#d3mm" style="display: block; text-align:center">Multimedia Broadcasting</a></li>
            </ul>
          </li>
          <li class="has-submenu"><a href="#section4">PMB</a>
            <ul class="sub-menu">
              <li><a href="#snmpn" style="display: block; text-align:center">SNMPN</a></li>
              <li><a href="#snmptn" style="display: block; text-align:center">SNMPTN</a></li>
              <li><a href="#sbmpn" style="display: block; text-align:center">SBMPN</a></li>
              <li><a href="#simandiri" style="display: block; text-align:center">SIMANDIRI</a></li>
            </ul>
          </li>
          <li><a href="#berita" class="berita">Berita</a></li>
          <li class="has-submenu"><a href="#">Login</a>
            <ul class="sub-menu">
              <li><a href="#" data-target="#login" data-toggle="modal" style="display: block; text-align:center">Login Sebagai Admin</a></li>
            </ul>
          </li>
      </ul>
    </nav>
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/aa.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <!--<div class="caption">
              <h6> Politeknik Elektronika Negeri Surabaya</h6>
              <h2><em>Selamat</em> Datang</h2>
              <div class="main-button">
                  <div class="scroll-to-section"><a href="#tentang">Tentang Kampus</a></div>
              </div>
          </div>-->
      </div>
  </section>
  <!-- ***** Main Banner Area End ***** -->

  <?php
    $g = mysqli_query($db, "SELECT * FROM departemen");
  ?>
  
  <section class="section why-us" data-section="ti">
    <div class="container">
      <div class="row">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="section-heading" style="color: white">
            <h2>Departemen Teknik Informatika dan Komputer</h2>
            <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan dimasa yang akan datang akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika Negeri Surabaya mendirikan Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3 Teknik Informatika, D4 Teknik Informatika, D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer. Dengan tujuan menjadi pusat unggulan pendidikan teknologi rekayasa dibidang emerging technology yang terkait bidang Teknologi Informasi dan Komputer untuk menghasilkan lulusan yang siap bersaing dipasar global, Departemen Teknik Informatika dan Komputer telah banyak menghasilkan lulusan yang berkualifikasi unggul dan bekerja sebagai Programmer, Software Engineer, Hardware Designer, Network Administrator, Computer System Analyst, Manager/Supervisor, Services/Technical Support, Marketing/Sales, dan lain-lain.</p>
        
          </div>
        </div>
        <div class="row">
        
            <?php while($i = mysqli_fetch_array($g)){ ?>
        <div class="col-md-3 ">
        <div class="icon-box">
              <h5><a href=""><?= $i['keterangan']; ?></a></h5>
              <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $i['picture'] ).'" width="170px" height="100px"/>';?>
          </div>
       </div>
       <?php } ?>
    </div>
  </section>
  
  <?php
    $ll = mysqli_query($db, "SELECT * FROM departmenmmb");
  ?>
  <section class="section why-us" data-section="mmb">
    <div class="container">
      <div class="row">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="section-heading" style="color: white;" >
            <h2>Departemen Multimedia Kreatif</h2>
            <p style="text-align: justify; text-justify: inter-word; font-size:16px">Departemen Teknologi Multimedia Kreatif (DTMK) Politeknik Elektronika Negeri Surabaya (PENS) diresmikan pada tahun 2012. Departemen ini menaungi dua Program Studi (Prodi) yakni D3 Multimedia Broadcasting (MMB) dan D4 Game Technology (GT). Kedua Prodi ini, bergerak dalam bidang film, video, musik, photography, televisi, radio, dan game. Dengan bertujuan untuk menjadi pusat unggulan pendidikan teknologi multimedia dalam mengembangkan industri kreatif. Untuk mencapai hal tersebut, Departemen ini menghasilkan insan-insan kreatif dengan kemampuan penguasaan teknologi multimedia, serta berperan aktif dalam pengembangan industri kreatif di bidang multimedia. DTMK turut berperan dalam penguatan sumber daya manusia, dimana didalamnya bertugas untuk melakukan perbaikan beban mengajar sesuai standar, serta meningkatkan penelitian dan pengabdian pada masyarakat. Tidak hanya itu tetapi juga sebagai sarana dan prasarana untuk mahasiswa.</p>
            </div>
          </div>
          <div class="row">
        <?php while($mm = mysqli_fetch_array($ll)){ ?>
        <div class="col-md  -3">
        <div class="icon-box">
        <h5><a href=""><?= $mm['keterangan']; ?></a></h5>
        <?php echo '<img src="data:image/jpg;base64,'.base64_encode( $mm['picture'] ).'" width="170px" height="100px"/>';?>
       </div>
        </div>
       <?php } ?>
    </div>
  </section>

  <section class="section coming-soon" data-section="d3ti">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" style="color: white">
            <h2>Teknik Informatika</h2>
            <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan dimasa yang akan datang akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika Negeri Surabaya mendirikan Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3 Teknik Informatika, D4 Teknik Informatika, D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer. Dengan tujuan menjadi pusat unggulan pendidikan teknologi rekayasa dibidang emerging technology yang terkait bidang Teknologi Informasi dan Komputer untuk menghasilkan lulusan yang siap bersaing dipasar global, Departemen Teknik Informatika dan Komputer telah banyak menghasilkan lulusan yang berkualifikasi unggul dan bekerja sebagai Programmer, Software Engineer, Hardware Designer, Network Administrator, Computer System Analyst, Manager/Supervisor, Services/Technical Support, Marketing/Sales, dan lain-lain.</p>
        
          </div>
        </div>
        <div class="col-md-12">
       </div>
    </div>
  </section>

  <section class="section coming-soon" data-section="d3mm">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading"style="color: white">
            <h2>Teknologi Multimedia Broadcasting</h2>
            <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pada saat ini kebutuhan akan teknologi informasi memegang peranan yang sangat penting dan dimasa yang akan datang akan menjadi tulang punggung pertumbuhan ekonomi bangsa. Karena itu, Politeknik Elektronika Negeri Surabaya mendirikan Departemen Teknik Informatika dan Komputer yang terdiri dari empat program studi, yaitu D3 Teknik Informatika, D4 Teknik Informatika, D4 Teknik Komputer, serta S2 Terapan Teknik Informatika dan Komputer. Dengan tujuan menjadi pusat unggulan pendidikan teknologi rekayasa dibidang emerging technology yang terkait bidang Teknologi Informasi dan Komputer untuk menghasilkan lulusan yang siap bersaing dipasar global, Departemen Teknik Informatika dan Komputer telah banyak menghasilkan lulusan yang berkualifikasi unggul dan bekerja sebagai Programmer, Software Engineer, Hardware Designer, Network Administrator, Computer System Analyst, Manager/Supervisor, Services/Technical Support, Marketing/Sales, dan lain-lain.</p>
       
          </div>
        </div>
        <div class="col-md-12">
       </div>
    </div>
  </section>

  <section class="section courses" data-section="snmpn">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="color: white; font-size:16px" >
              <h2>SNMPN</h2>
              <p>JALUR SNMPN KHUSUS JENJANG DIPLOMA 3</p>
              <h4>Daftar Ulang Peserta SNMPN 2021</h4>
          <?php 
            $bb = mysqli_query($db, "SELECT * FROM pmb WHERE ID=4");

            while($roww = mysqli_fetch_array($bb)){
          ?>
          <p>Daftar ulang tersedia pada tanggal <?= $roww['tanggal']; ?></p>
          <?php } ?>
          <br>
          <h4>Seleksi Nasional Masuk Politeknik Negeri Se-Indonesia</h4>
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Seleksi Nasional Masuk Politeknik Negeri (SNMPN) 2021 merupakan seleksi Jalur Undangan yang diperuntukkan bagi calon peserta/siswa sekolah yang akan melanjutkan pendidikan di Perguruan Tinggi (khusus jenjang Diploma 3) Bidang Vokasi atau Politeknik Negeri di seluruh wilayah Indonesia. Pola seleksi ini tertuang dalam suatu sistem yang terpadu dan diselenggarakan secara serentak melalui seleksi prestasi akademik siswa selama mengikuti pendidikan di Sekolah Lanjutan Tingkat Atas.</p><br>

          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pada tahun 2014-2019, nama SNMPN dikenal dengan nama Penelusuran Minat dan Kemampuan Politeknik Negeri (PMDK- PN) . Dengan diadakannya Forum Direktur Politeknik Negeri se-Indonesia (FDPNI) pada tahun 2019 di Surabaya,  maka ditetapkannya pola Penerimaan Mahasiswa Baru (PMB) jalur PMDK- PN berganti nama menjadi jalur SNMPN. Mekanisme pendaftaran dan persyaratan tetap sama, yang berubah hanya namanya saja. Hal ini bertujuan supaya arti kata Seleksi dalam SNMPN memiliki dan mencakup arti yang luas. </p><br>

          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pendaftaran calon peserta/Siswa melalui jalur SNMPN tidak dikenakan biaya apapun karena semua biaya telah dibebankan pada anggaran pemerintah. Jalur SNMPN ini juga mengakomodir calon peserta/siswa yang diterima dan berasal dari keluarga ekonomi lemah tetapi mempunyai prestasi akademik tinggi.</p><br>

          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Informasi lengkap serta tata cara pendaftaran Jalur SNMPN dapat diakses pihak sekolah melalui situs <a href="http://snmpn.politeknik.or.id/">http://snmpn.politeknik.or.id/</a> dengan cara login menggunakan username dan password yang akan diberikan panitia kepada masing-masing sekolah dan mendaftarkan siswa-siswa terbaiknya. Selanjutnya siswa-siswa tersebut akan diberikan usemame dan password yang dapat digunakan untuk memasukkan data secara on-line. Selanjutnya kami mengharapkan kerjasama semua pihak yang terkait dengan sistem SNMPN 2021 sehingga proses ini dapat terlaksana sesuai dengan yang diharapkan.</p>
          <br>
          <h4>Pengumuman SNMPN 2021</h4>
          <?php 
            $bb = mysqli_query($db, "SELECT * FROM pmb WHERE ID=5");

            while($roww = mysqli_fetch_array($bb)){
          ?>
          <p>Hasil SNMPN <?= $roww['tanggal']; ?></p>
          <?php } ?>
            </div>
          </div>
    </div>
  </section>
  <section class="section courses" data-section="snmptn">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="color: white" >
              <h2>SNMPTN</h2>
              <p>Khusus Jenjang Diploma 3</p>
              <h4>Daftar Ulang Peserta SNMPTN 2021</h4>
              <?php 
            $bb = mysqli_query($db, "SELECT * FROM pmb WHERE ID=4");

            while($roww = mysqli_fetch_array($bb)){
          ?>
          <p>Daftar ulang tersedia pada tanggal <?= $roww['tanggal']; ?></p>
          <?php } ?>

          <h4>Seleksi Nasional Masuk Perguruan Tinggi Negeri</h4>
          <br>
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Seleksi Nasional Masuk Perguruan Tinggi Negeri (SNMPTN) 2021 merupakan seleksi Jalur Undangan yang diperuntukkan bagi calon peserta/siswa sekolah yang akan melanjutkan pendidikan di Perguruan Tinggi (khusus jenjang Sarjana Terapan) yang dilaksanakan serentak seluruh Indonesia. SNMPTN diselenggarakan pertama kali oleh Ditjen Dikti tahun 2008.</p>
          <br>
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pada awalnya, SNMPTN terdiri dari dua jalur yaitu SNMPTN undangan (seperti PMDK) melalui nilai rapot dan SNMPTN tulis melalui ujian tulis. Pada tahun 2013, SNMPTN tulis diubah nama menjadi Seleksi Bersama Masuk Perguruan Tinggi Negeri (SBMPTN). dan SNMPTN Undangan kemudian berganti nama menjadi SNMPTN (tidak pakai undangan) dengan kriteria seleksi penerimaan berdasarkan nilai rapot, nilai Ujian Nasional, dan prestasi akademis lainnya.</p>
          <br>
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Pendaftaran calon peserta/Siswa melalui jalur SNMPTN tidak dikenakan biaya apapun karena semua biaya telah dibebankan pada anggaran pemerintah. Jalur SNMPTN ini juga mengakomodir calon peserta/siswa yang diterima dan berasal dari keluarga ekonomi lemah tetapi mempunyai prestasi akademik tinggi. </p>

          <p style="text-align: justify; text-justify: inter-word; font-size:16px">Informasi lengkap serta tata cara pendaftaran Jalur SNMPTN dapat diakses pihak sekolah melalui situs http://ltmpt.ac.id/ dengan cara login menggunakan username dan password yang akan diberikan panitia kepada masing-masing sekolah dan mendaftarkan siswa-siswa terbaiknya. Selanjutnya siswa-siswa tersebut akan diberikan username dan password yang dapat digunakan untuk memasukkan data secara on-line. Selanjutnya kami mengharapkan kerjasama semua pihak yang terkait dengan sistem SNMPTN 2021 sehingga proses ini dapat terlaksana sesuai dengan yang diharapkan.</p>
           <br> <h4>Pengumuman SNMPTN 2021</h4>
            </div>
          </div>
    </div>
  </section>
  <section class="section courses" data-section="sbmpn">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="color: white" >
              <h2>SBMPN</h2>
              <p>JALUR SBMPN KHUSUS JENJANG PENDIDIKAN SARJANA TERAPAN DAN DIPLOMA 3</p>
              <h4>Seleksi Bersama Masuk Politeknik Negeri se Indonesia</h4><br>
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">SBMPN atau Seleksi Bersama Masuk Politeknik Negeri merupakan jalur masuk Politeknik Negeri dengan cara tes tulis. Hal ini bertujuan untuk memilih calon mahasiswa yang mempunyai kemampuan akademik untuk mengikuti dan menyelesaikan pendidikan di Politeknik sesuai dengan batas waktu yang telah ditetapkan.
          Nama SBMPN adalah perubahan nama dari jalur UMPN (Ujian Masuk Politeknik Negeri). Pergantian nama merupakan hasil diskusi dan keputusan bersama dalam Forum Direktur Politeknik Negeri se-Indonesia yang diadakan di Surabaya pada Desember 2019. Untuk proses dan tes pendaftaran tetap sama, hanya berganti nama saja.</p>
          <!-- <p style="text-align: justify; text-justify: inter-word; font-size:16px"></p><br> -->
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">
          </p>
          <!-- <p style="text-align: justify; text-justify: inter-word; font-size:16px"></p><br> -->
          <h4>Jadwal Pendaftaran SBMPN 2021</h4><br>
          <?php
            $sb = mysqli_query($db, "SELECT * FROM pmb WHERE id = 1");
            $sbm = mysqli_query($db, "SELECT * FROM pmb WHERE id = 2");
            $sbmpn = mysqli_query($db, "SELECT * FROM pmb WHERE id = 3");
            while($r = mysqli_fetch_array($sb)){
          ?>
          <p>Pendaftaran SBMPN <?= $r['tanggal']; ?></p>
          <?php }
            while($rsb = mysqli_fetch_array($sbm)){
          ?>
          <p>Pelaksanaan SBMPN <?= $rsb['tanggal']; ?></p>
          <?php }
            while($rsbm = mysqli_fetch_array($sbmpn)){
          ?>
          <p>Pengumuman SBMPN <?= $rsbm['tanggal']; ?></p>
          <?php } ?>
            </div>
          </div>
    </div>
  </section>
  <section class="section courses" data-section="simandiri">
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="color: white">
              <h2>SIMANDIRI</h2>
              <p>CBT SIMANDIRI</p>
              <h4>Seleksi Mandiri Politeknik Elektronika Negeri Surabaya 2021</h4>
         
            </div>
          </div>
    </div>
  </section>
  

  <section class="section coming-soon" data-section="tentang">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" style="color: white">
            <h2>Tentang Kampus</h2>
            <p style="text-align: justify; text-justify: inter-word; font-size:16px">
              Awal sejarah PENS dimulai pada tahun 1985. Saat itu, tim studi awal Japan International Cooperation Agency (JICA) untuk bantuan dan kerjasama teknik yang dikepalai oleh Prof. Y. Naito dari Tokyo Institute of Technology, datang ke politeknik ini. Setelah melakukan pengamatan dan studi kelayakan di tahun 1986, JICA menyetujui untuk memulai kerjasama teknik di tahun 1987 dengan mengirim 5 orang pengajar Indonesia ke perguruan tinggi teknologi di Jepang.

              Politeknik Elektronika & Telekomunikasi (PET) 19881- 1992
              Pada tanggal 15 Maret 1988, Pemerintah Jepang, melalui JICA secara resmi memberikan gedung kampus kepada pemerintah Indonesia lengkap dengan berbagai peralatan pendidikan. Selanjutnya pada tanggal 2 Juni 1988 Politeknik ini diresmikan dengan nama Politeknik Elektronika & Telekomunikasi (PET) dan sejak saat itulah tahun ajaran dimulai. Kerjasama dengan JICA pun berlanjut dengan banyaknya pengajar politeknik yang dikirim ke berbagai perguruan tinggi teknologi di Jepang dan sebaliknya, pengiriman beberapa ahli dari Jepang ke politeknik ini.
            </p>
            <p style="text-align: justify; text-justify: inter-word; font-size:16px">  
              Politeknik Elektronik Surabaya (PES) 1992 - 1996
              Pada bulan Juni 1991, Menteri Pendidikan dan Kebudayaan menata ulang keberadaan seluruh Politeknik, Institut dan sebagian Universitas di Indonesia. Pada saat itu politeknik ini pun berubah nama menjadi Politeknik Elektronika Surabaya (PES) yang merupakan bagian dari Institut Teknologi Sepuluh Nopember Surabaya (ITS).
            </p>
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">
              Politeknik Elektronika Negeri Surabaya (PENS) 1996 hingga sekarang
              Pada tahun 1996, nama politeknik ini kembali diubah oleh Menteri Pendidikan dan Kebudayaan menjadi Politeknik Elektronika Negeri Surabaya (PENS). Nama itulah yang kemudian tetap bertahan hingga kini.
            </p>  
          <p style="text-align: justify; text-justify: inter-word; font-size:16px">
              PENS sendiri memiliki dua departemen yang berada di luar kampus utama yaitu di Sumenep dan Lamongan.  
            </p>
          </div>
        </div>
        <div class="col-md-12">
       </div>
    </div>
  </section>

  <?php
  $img = mysqli_query($db, "SELECT * FROM berita");
?>
  <section class="section coming-soon" data-section="berita">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading" style="color: white">
            <h2>Berita</h2>
            <?php while($row = mysqli_fetch_assoc($img)){ ?>
            <h3><p style="text-align: center; margin-top: 10px; font-size:24px"><?= $row['judul']; ?></p></h3>
              <?php echo '<img src="img/'. $row['gambar'] . '"/>';?>
          <p style="text-align:justify; text-justify: inter-word; font-size:16px; padding: 20px 0" id="text">
          <?php 
            echo $row['keterangan']; 
          ?>
          </p>
          <?php } ?>
          </div>
        </div>
        <div class="col-md-12">
       </div>
    </div>
  </section>
 


<div class="modal" tabindex="-1" role="dialog" id="login">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <input type="submit" value="Login" name="lgn" class="btn btn-success" style="float: right;">
        </form>
      </div>
    </div>
  </div>
</div>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <p style="float: left; width: 500px; text-align: left; font-size: 15px">
                <a href="#" class="twitter"><i class="fa fa-map-marker" style="margin-left: -3px;"></i></a>
              Jl Raya Lenteng KM 2 Batuan,
              Sumenep, Jawa Timur<br>
              <a href="#" class="twitter"><i class="fa fa-whatsapp" style="margin-left: -3px;"></i></a>
              <strong>Kampus Sumenep:</strong> 0813 9464 6263<br>
              <a href="#" class="twitter"><i class="fa fa-whatsapp" style="margin-left: -3px;"></i></a>
              <strong>Kampus Surabaya:</strong> +62 31 594 7280<br>
              <a href="#" class="twitter"><i class="fa fa-envelope" style="margin-left: -3px;"></i></a>
              <strong>Email:</strong> penspsdkusumenep@gmail.com<br>
            </p>
            <br>
          <p><i class="fa fa-copyright"></i> Copyright 2021 PENS PSDKU SUMENEP</p>
          </div>
      </div>
    </div>
    
  

  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>