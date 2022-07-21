<html>
<center>
<h1>SAVE EDIT DATA BARANG</h1>
<hr>
<table>
<?php
$kodebrg=$_POST["kodebrg"];
$namabarang=$_POST["namabarang"];
$harga=$_POST["harga"];
$stok=$_POST["stok"];

echo "<tr><td>KODE BARANG  <td><input name=kodebrg value=$kodebrg size=30 readonly>";
echo "<tr><td>NAMA BARANG  <td><input name=namabarang value=$namabarang size=30>";
echo "<tr><td>HARGA        <td><input name=harga value=$harga size=30>";
echo "<tr><td>STOK         <td><input name=stok value=$stok size=30>";

$conn=mysqli_connect("localhost","root","","IF6");
$sql="UPDATE barang set nama_barang='$namabarang', harga='$harga', stok='$stok' where id_barang='$kodebrg'";
$hasil=mysqli_query($conn,$sql);
echo"</table><hr>Data Barang Telah disimpan";
?>