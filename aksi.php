<?php
$kabupaten = $_POST['kabupaten'];

if ($kabupaten == "cilacap"){
	header('Location: data_cilacap.php');
	}
elseif ($kabupaten == "banyumas") {
	header('Location: data_banyumas.php');
}
elseif ($kabupaten == "grobogan") {
	header('Location: data_grobogan.php');
}
elseif ($kabupaten == "kendal") {
	header('Location: data_kendal.php');
}
elseif ($kabupaten == "brebes") {
	header('Location: data_brebes.php');
}
else{
	header('Location: cari_tabel.php');

}


?>