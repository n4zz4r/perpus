<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            display: inline-block;
            padding: 8px 16px;
            margin-bottom: 20px;
            background-color: #007BFF;
            color: #fff;
            border: 1px solid #007BFF;
            border-radius: 4px;
            cursor: pointer;
        }

        a:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: #fff;
            padding: 8px 16px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<?php
include 'connect.php';
$sql = "SELECT * FROM buku";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Judul</th><th>Pengarang</th><th>Penerbit</th><th>Tahun
Terbit</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["buku_id"]."</td>";
        echo "<td>".$row["judul"]."</td>";
        echo "<td>".$row["pengarang"]."</td>";
        echo "<td>".$row["penerbit"]."</td>";
        echo "<td>".$row["tahun_terbit"]."</td>";
        echo "<td><a href='update.php?id=".$row["buku_id"]."'>Edit</a> | <a
href='delete.php?id=".$row["buku_id"]."'>Hapus</a></td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data buku.";
}
$mysqli->close();
?>

<a href="anggota_form.php">
    <input type="submit" name="tambah_anggota" value="Belum daftar? Daftar dulu yuk!!!">
</a>

</body>
</html>


<!-- 
// include 'connect.php';
// $sql = "SELECT * FROM buku";
// $result = $mysqli->query($sql);
// if ($result->num_rows > 0) {
//  echo "<table border='1'>";
//  echo "<tr><th>ID</th><th>Judul</th><th>Pengarang</th><th>Penerbit</th><th>Tahun
// Terbit</th><th>Action</th></tr>";
//  while ($row = $result->fetch_assoc()) {
//  echo "<tr>";
//  echo "<td>".$row["buku_id"]."</td>";
//  echo "<td>".$row["judul"]."</td>";
//  echo "<td>".$row["pengarang"]."</td>";
//  echo "<td>".$row["penerbit"]."</td>";
//  echo "<td>".$row["tahun_terbit"]."</td>";
//  echo "<td><a href='update.php?id=".$row["buku_id"]."'>Edit</a> | <a
// href='delete.php?id=".$row["buku_id"]."'>Hapus</a></td>";
//  echo "</tr>";
//  }
 
//  echo "</table>";
// } else {
//  echo "Tidak ada data buku.";
// }
// $mysqli->close();


<a href="anggota_form.php"> 
    <input type="submit" name="tambah_anggota" value="Belum daftar? Daftar dulu yuk!!!">
</a> -->

