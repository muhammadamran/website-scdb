<?php 
session_start();
include "db/db.php";

$url = $_SERVER['REQUEST_URI'];
$get_api = explode('/', $url);

if ($get_api[1] == 'api') {
	include $get_api[1] . '/' . $get_api[2] . '.php';
} else {


	$data = $db->query('SELECT * FROM tbl_ftheme');
	$row = $data->fetch_assoc();

	if ($row['kode']== '001' && $row['berkas']== '1') {

		// Theme Vidio
		include "include/laman/vidio/head.php";
		include "pages/laman/vidio-validation.php";
		include "include/laman/vidio/footer.php";

	} else if ($row['kode']== '002' && $row['berkas']== '1') {

		// Theme Slide
		include "include/laman/slide/head.php";
		include "pages/laman/slide-validation.php";
		include "include/laman/slide/footer.php";

	} else if ($row['kode']== '003' && $row['berkas']== '1') {

		// Theme Single
		include "include/laman/single/head.php";
		include "pages/laman/single-validation.php";
		include "include/laman/single/footer.php";

	} else if ($row['kode']== '004' && $row['berkas']== '1') {

		// Theme Color
		include "include/laman/color/head.php";
		include "pages/laman/color-validation.php";
		include "include/laman/color/footer.php";

	}

}
?>