<html>
<style type="text/css">
td
{
padding:5px;
border:1px solid #ccc;

}
</style>
<body>
<center>
<h2>SENARAI BARANG MAINAN</h2>

<?php
include('config1.php');
$query1=mysqli_query("select kod_produk,nama_produk,harga,kuantiti from jadualmainan");
$num_result=mysqli_num_rows($query1);


echo"<table>
	<td>KOD PRODUK</td>
	<td>NAMA PRODUK</td>
	<td>HARGA</td>
	<td>KUANTITI</td>
";
for($i;$i<$num_result;$i++){

$query2=mysqli_fetch_array($query1);

echo "<tr><td>".$query2['kod_produk']."</td>";
echo "<td>".$query2['nama_produk']."</td>";
echo "<td>".$query2['harga']."</td>";
echo "<td>".$query2['kuantiti']."</td>";


}
?>
</ol>
</table>
<br>
<a href="add.php">Tambah Rekod</a>;
</center>
</body>
</html>