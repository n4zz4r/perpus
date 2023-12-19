<?php
include 'connect.php';

// Fungsi untuk menampilkan data peminjaman
function tampilPeminjaman() {
    global $mysqli;
    $sql = "SELECT p.*, b.judul AS judul_buku, a.nama AS nama_anggota
            FROM peminjaman p
            JOIN buku b ON p.buku_id = b.buku_id
            JOIN anggota a ON p.anggota_id = a.anggota_id";
    $result = $mysqli->query($sql);

    echo "<h2>Daftar Peminjaman</h2>";
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>ID Peminjaman</th><th>Judul Buku</th><th>Nama Anggota</th><th>Tanggal Peminjaman</th><th>Tanggal Kembali</th><th>Status</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["peminjaman_id"]."</td>";
            echo "<td>".$row["judul_buku"]."</td>";
            echo "<td>".$row["nama_anggota"]."</td>";
            echo "<td>".$row["tanggal_peminjaman"]."</td>";
            echo "<td>".$row["tanggal_kembali"]."</td>";
            echo "<td>".$row["status"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data peminjaman.";
    }
}

// Fungsi untuk menambah data peminjaman
function tambahPeminjaman($buku_id, $anggota_id, $tanggal_peminjaman, $tanggal_kembali, $status) {
    global $mysqli;
    $sql = "INSERT INTO peminjaman (buku_id, anggota_id, tanggal_peminjaman, tanggal_kembali, status) 
            VALUES ('$buku_id', '$anggota_id', '$tanggal_peminjaman', '$tanggal_kembali', '$status')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Peminjaman berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Fungsi untuk menghapus data peminjaman berdasarkan ID
function hapusPeminjaman($peminjaman_id) {
    global $mysqli;
    $sql = "DELETE FROM peminjaman WHERE peminjaman_id=$peminjaman_id";

    if ($mysqli->query($sql) === TRUE) {
        echo "Peminjaman berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Fungsi untuk mengubah status data peminjaman
function ubahStatusPeminjaman($peminjaman_id, $status) {
    global $mysqli;
    $sql = "UPDATE peminjaman SET status='$status' WHERE peminjaman_id=$peminjaman_id";

    if ($mysqli->query($sql) === TRUE) {
        echo "Status peminjaman berhasil diubah.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Gunakan fungsi-fungsi di atas sesuai dengan kebutuhan aplikasi Anda
// Contoh penggunaan:
// tampilPeminjaman();
// tambahPeminjaman(1, 2, '2023-01-01', '2023-01-15', 'dipinjam');
// hapusPeminjaman(1);
// ubahStatusPeminjaman(2, 'kembali');

$mysqli->close();
?>
