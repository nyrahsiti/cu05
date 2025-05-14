Delete.php
<?php
include 'config.php'; 
	$kod_produk =$_GET['kod_produk'];// sending query
	$delete= mysqli_query($connect, "DELETE FROM jadual_item WHERE kod_produk = '$kod_produk'") ;
		
	header("Location: index.php");
?>
