<br>Quảng cáo <br><br>
<?php
include "ket_noi.php";
	$tv="select html from quang_cao where vi_tri='trai' ";
	$tv_1=mysqli_query($conn, $tv);
	$tv_2=mysqli_fetch_array($tv_1);
	echo $tv_2['html'];
mysqli_close($conn);
?>