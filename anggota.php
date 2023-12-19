<?php
include 'connect.php';

function getAllAnggota()
{
    global $mysqli;
    $query = "SELECT * FROM anggota";
    $result = $mysqli->query($query);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    return $data;
}

function getAnggotaById($id)
{
    global $mysqli;
    $query = "SELECT * FROM anggota WHERE anggota_id = $id";
    $result = $mysqli->query($query);
    return $result->fetch_assoc();
}

function addAnggota($nama, $alamat, $email, $telepon)
{
    global $mysqli;
    $query = "INSERT INTO anggota (nama, alamat, email, telepon) VALUES ('$nama', '$alamat', '$email', '$telepon')";
    return $mysqli->query($query);
}

function updateAnggota($id, $nama, $alamat, $email, $telepon)
{
    global $mysqli;
    $query = "UPDATE anggota SET nama='$nama', alamat='$alamat', email='$email', telepon='$telepon' WHERE anggota_id=$id";
    return $mysqli->query($query);
}

function deleteAnggota($id)
{
    global $mysqli;
    $query = "DELETE FROM anggota WHERE anggota_id=$id";
    return $mysqli->query($query);
}

// Bagian untuk menambah data anggota
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['tambah_anggota'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    if (addAnggota($nama, $alamat, $email, $telepon)) {
        echo "Anggota berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan anggota.";
    }
}

// Bagian untuk menghapus data anggota
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['hapus_anggota'])) {
    $id = $_POST['id'];

    if (deleteAnggota($id)) {
        echo "Anggota berhasil dihapus!";
    } else {
        echo "Gagal menghapus anggota.";
    }
}

?>
