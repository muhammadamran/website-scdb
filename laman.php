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

	if ($row['kode']==1) {

		// Theme Vidio
		include "include/laman/head.php";
		include "pages/laman/vidio-validation.php";
		include "include/laman/footer.php";

	} else if ($row['kode']==2) {

		// Theme Slide
		include "include/laman/head.php";
		include "pages/laman/slide-validation.php";
		include "include/laman/footer.php";

	} else if ($row['kode']==3) {

		// Theme Single
		include "include/laman/head.php";
		include "pages/laman/single-validation.php";
		include "include/laman/footer.php";

	} else if ($row['kode']==4) {

		// Theme Color
		include "include/laman/head.php";
		include "pages/laman/color-validation.php";
		include "include/laman/footer.php";

	}

}
?>