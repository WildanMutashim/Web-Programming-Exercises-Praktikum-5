<!DOCTYPE html>
<html>
<head>
<title>DATA UKURAN TABUNG</title>
</head>
<body>
<h1><center>DATA UKURAN TABUNG</center></h1>
<table border="1">
  <td>Nama Tabung</td>
  <td>Diameter</td>
  <td>Tinggi</td>
  <td>Luas</td>

<?php
$myfile = fopen("datatabung.dat", "r") or die("Tidak bisa buka file!");
while(!feof($myfile)) {
  $baris = fgets($myfile);
  $pecah = explode(",", $baris);

  echo "<tr>
    <td>".$pecah[0]."</td>
    <td>".$pecah[1]."</td>
    <td>".$pecah[2]."</td>
    <td><a href='hitungluas.php?n=$pecah[0]&d=$pecah[1]&t=$pecah[2]'>view</a></td>
  </tr>";
}
fclose($myfile);

?>
</table>
</body>
</html>