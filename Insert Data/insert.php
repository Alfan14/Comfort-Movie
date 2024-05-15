<?php
//Include file koneksi ke database
include "koneksi.php";

//menerima nilai dari kiriman form input-barang 
$username=$_POST['username'];
$pasword=$_POST['pasword'];

//Query input menginput data kedalam tabel barang
  $sql="insert into login (username,pasword) values('$username','$pasword')";
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "Berhasil insert data";
	exit;
  }
else {
	echo "Gagal insert data";
	exit;
}  
