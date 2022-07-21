<center>
<h1>MENAMPILKAN DATA BARANG
<hr>
<table border=10>
<tr><th>NO<th>KODEBRG<th>NAMA BARANG<th>HARGA<th>STOK<th>TOTAL<th>DISKON 10%
<?php
$conn=mysqli_connect("localhost","root","","IF6");
$sql="SELECT * from barang";
$hasil=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($hasil);
$n=1;
$totalHarga = 0;
do
{
    list($kodebrg,$namabarang,$harga,$stok)=$row;
    $total = $harga * $stok;
    $diskon = 0.1 * $total;
    echo "<tr><td>$n<td>$kodebrg<td>$namabarang<td align=right>$harga<td align=right>$stok<td align=right>$total<td align=right>$diskon";
    $n++;
    $totalHarga = $totalHarga + $total;
}
while($row=mysqli_fetch_row($hasil));
echo "<tr><td colspan=5>TOTAL HARGA<td colspan=2 align=center>$totalHarga";
?>