<?php include "db/db.php";

$data = $db->query('SELECT MAX(id) AS ID,link,pending,berkas FROM tbl_flink WHERE berkas=1 ORDER BY ID DESC LIMIT 1');
$row = $data->fetch_assoc()
?>
<script>
	setTimeout(function() {
		window.location.href = '<?= $row['link']; ?>'; 
	}, <?= $row['pending']; ?>);
</script>