<?php 
session_start();
include "db/db.php";

$url = $_SERVER['REQUEST_URI'];
$get_api = explode('/', $url);

if ($get_api[1] == 'api') {
	include $get_api[1] . '/' . $get_api[2] . '.php';
} else {

	include "include/laman/head.php";
	$data = $db->query('SELECT * FROM tbl_ftheme');
	$row = $data->fetch_assoc();

	if ($row['kode']== '1' && $row['kode']== '1') {
		// Theme Vidio
		include "pages/laman/vidio-validation.php";

	} else if ($row['kode']== '2' && $row['kode']== '1') {

		// Theme Slide
		include "pages/laman/slide-validation.php";

	} else if ($row['kode']== '3' && $row['kode']== '1') {

		// Theme Single
		include "pages/laman/single-validation.php";

	} else if ($row['kode']== '4' && $row['kode']== '1') {

		// Theme Color
		include "pages/laman/color-validation.php";

	}
	include "include/laman/footer.php";
}
?>