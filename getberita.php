<?php
    include 'config/koneksi.php';

    $sql = "SELECT keterangan FROM berita WHERE id = ?";

    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $_GET['q']);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($ket);
    $stmt->fetch();
    $stmt->close();

    echo "<p style='text-align: justify; text-justify: inter-word;' id='text'>". substr($ket, 930, 1000) ."</p>"
?>