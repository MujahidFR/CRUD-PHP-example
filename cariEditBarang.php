<center>
<form action="saveEditBarang.php" method=post>
<h1>Tampil Data Barang</h1>
<hr>
<table border=1>
<?php

$kodebrg= $_POST['kodebrg'];
$conn   =mysqli_connect("localhost","root","","IF6");
$sql    ="SELECT * FROM barang WHERE id_barang='$kodebrg' ";
$hasil  =mysqli_query($conn,$sql);
$row    =mysqli_fetch_row($hasil);
do
{
    list($kodebrg,$namabarang,$harga,$stok)=$row;
    if($kodebrg!=""){
        echo "<tr><td>KODE BARANG  <td><input name=kodebrg value=$kodebrg size=30 readonly>";
        echo "<tr><td>NAMA BARANG  <td><input name=namabarang value=$namabarang size=30>";
        echo "<tr><td>HARGA        <td><input name=harga value=$harga size=30>";
        echo "<tr><td>STOK         <td><input name=stok value=$stok size=30>";
     }
}
while($row=mysqli_fetch_row($hasil));

if($kodebrg==""){
    echo "</table><br>Maaf Data Barang Tidak Ada";
    exit;
}
?>

</table>
<hr>
<input type=submit value=Save>
<input type=reset value=Reset>