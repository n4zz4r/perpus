<?php
// include 'anggota.php';
// $sql = "SELECT * FROM anggota";
// $result = $mysqli->query($sql);
// if ($result->num_rows > 0) {
//  echo "<table border='1'>";
//  echo "<tr><th>nama</th><th>alamat</th><th>email</th><th>Telepon</th></tr>";
//  while ($row = $result->fetch_assoc()) {
//  echo "<tr>";
// //  echo "<td>".$row["anggota_id"]."</td>";
//  echo "<td>".$row["nama"]."</td>";
//  echo "<td>".$row["alamat"]."</td>";
//  echo "<td>".$row["email"]."</td>";
//  echo "<td>".$row["telepon"]."</td>";
//  echo "<td>
//  <a href='anggota_update.php?id=".$row["anggota_id"]."'>Edit</a>
//  <a href='anggota_delete.php?id=".$row["anggota_id"]."'>Hapus</a>
//  </td>";
//  echo "</tr>";
//  }
 
//  echo "</table>";
// } else {
//  echo "Tidak ada data buku.";
// }
// $mysqli->close();

include 'anggota.php';
$sql = "SELECT * FROM anggota";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>nama</th><th>alamat</th><th>email</th><th>Telepon</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nama"]."</td>";
        echo "<td>".$row["alamat"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["telepon"]."</td>";
        echo "<td>
                <a href='anggota_update.php?id=".$row["anggota_id"]."'>Edit</a>
                <a href='anggota_delete.php?id=".$row["anggota_id"]."'>Hapus</a>
              </td>";
        echo "</tr>";
    }

    echo "</table>";

    // Tambahkan tombol Kembali
    echo "<a href='read.php'>Kembali</a>";
} else {
    echo "Tidak ada data anggota.";
}

$mysqli->close();

?>