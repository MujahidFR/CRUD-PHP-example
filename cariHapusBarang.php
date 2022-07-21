<center>
<form action="saveHapusBarang.php" method=post>
<h1>
Tampil Data Barang<br>
<hr>
<table border=1>

<?php
$kodebrg=$_POST["kodebrg"];
$conn=mysqli_connect("localhost","root","","IF6");
$sql="SELECT * from barang where id_barang = '$kodebrg' ";
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);

do
{
    list($kodebrg,$namabarang,$harga,$stok)=$row;
    echo "<tr><td>KODE BARANG  <td><input name=kodebrg value=$kodebrg size=30 readonly>";
    echo "<tr><td>NAMA BARANG  <td><input name=namabarang value=$namabarang size=30 readonly>";
    echo "<tr><td>HARGA        <td><input name=harga value=$harga size=30 readonly>";
    echo "<tr><td>STOK         <td><input name=stok value=$stok size=30 readonly>";
}
while($row=mysqli_fetch_row($hasil));
?>
</table>
<hr>
<input type="submit" value="HAPUS">