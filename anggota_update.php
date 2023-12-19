<?php
include 'anggota.php';
$id = $_GET['id']; // ID dari buku yang akan diupdate
$sql = "SELECT * FROM anggota WHERE anggota_id=$id";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 ?>
 <form action="anggota_read.php" method="POST">
 nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
 alamat : <input type="text" name="alamat" value="<?php echo $row['alamat'];
?>"><br>
 email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
 telepon: <input type="number" name="telepon" value="<?php echo
$row['telepon']; ?>"><br>
 <input type="hidden" name="id" value="<?php echo $row['anggota_id']; ?>">
 <input type="submit" value="Update">
 </form>
 <?php
} else {
 echo "Data tidak ditemukan.";
}
$mysqli->close();
?>