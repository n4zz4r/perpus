<?php
include 'connect.php';

// Menerima data yang dikirim dari formulir pembaruan
$id = $_POST['id'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun_terbit = $_POST['tahun_terbit'];

// Query SQL untuk melakukan pembaruan data
$sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun_terbit' WHERE buku_id=$id";

if ($mysqli->query($sql) === TRUE) {
    echo "Data berhasil diperbarui. <a href='read.php'>Lihat Data</a>";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
