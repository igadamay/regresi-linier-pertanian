<?php 
include 'connect.php';

$No = $_POST['No'];
$Tahun = $_POST['Tahun'];
$Jenis_Tanaman = $_POST['Jenis_Tanaman'];
$Kabupaten_kota = $_POST['Kabupaten_kota'];
$Luas_Panen = $_POST['Luas_Panen'];
$Provitas = $_POST['Provitas'];
$Produksi = $_POST['Produksi'];


if ($Kabupaten_kota == "Kabupaten Cilacap") {
	# code...
$sql="INSERT INTO db_cilacap (No,Tahun,Jenis_Tanaman,Kabupaten_kota,Luas_Panen,Provitas,Produksi) VALUES
		('$No','$Tahun','$Jenis_Tanaman','$Kabupaten_kota','$Luas_Panen','$Provitas','$Produksi')";

		$hasil = mysqli_query($koneksi,$sql);

		if ($hasil) {
			header("location: data_cilacap.php");
		exit;
  		}
		else {
			header("location: tambah_data.php");
		exit;
		}  

}

elseif ($Kabupaten_kota == "Kabupaten Banyumas") {
	$sql="INSERT INTO db_banyumas (No,Tahun,Jenis_Tanaman,Kabupaten_kota,Luas_Panen,Provitas,Produksi) VALUES
		('$No','$Tahun','$Jenis_Tanaman','$Kabupaten_kota','$Luas_Panen','$Provitas','$Produksi')";

		$hasil = mysqli_query($koneksi,$sql);

		if ($hasil) {
			header("location: data_banyumas.php");
		exit;
  		}
		else {
			header("location: tambah_data.php");
		exit;
		}  
} 
elseif ($Kabupaten_kota == "Kabupaten Kendal") {
	$sql="INSERT INTO db_kendal (No,Tahun,Jenis_Tanaman,Kabupaten_kota,Luas_Panen,Provitas,Produksi) VALUES
		('$No','$Tahun','$Jenis_Tanaman','$Kabupaten_kota','$Luas_Panen','$Provitas','$Produksi')";

		$hasil = mysqli_query($koneksi,$sql);

		if ($hasil) {
			header("location: data_kendal.php");
		exit;
  		}
		else {
			header("location: tambah_data.php");
		exit;
		}  
} 

elseif ($Kabupaten_kota == "Kabupaten Grobogan") {
	$sql="INSERT INTO db_grobogan (No,Tahun,Jenis_Tanaman,Kabupaten_kota,Luas_Panen,Provitas,Produksi) VALUES
		('$No','$Tahun','$Jenis_Tanaman','$Kabupaten_kota','$Luas_Panen','$Provitas','$Produksi')";

		$hasil = mysqli_query($koneksi,$sql);

		if ($hasil) {
			header("location: data_grobogan.php");
		exit;
  		}
		else {
			header("location: tambah_data.php");
		exit;
		}  
}
else{
	header("location: tambah_data.php");
		exit;
}

 
	    

?>