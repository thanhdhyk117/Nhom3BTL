<?php
include "ket_noi.php";
	$_SESSION['trang_chi_tiet_gio_hang']="co";
	$id=$_GET['id'];
	$tv="select * from san_pham where id='$id'";
	$tv_1=mysqli_query($conn,$tv);
	$tv_2=mysqli_fetch_array($tv_1);
	$link_anh="hinh_anh/san_pham/".$tv_2['hinh_anh'];
	echo "<table>";
		echo "<tr>";
			echo "<td width='300px' align='left' >";
				echo "<img src='$link_anh' width='220px' >";
			echo "</td>";
			echo "<td valign='top' >";
				echo"<div>";
				echo "<a href='#'>";
					echo $tv_2['ten'];
				echo "</a>";
				echo "</div>";
				echo "<br>";
				echo "<br>";
				$gia=$tv_2['gia'];
				$gia=number_format($gia,0,",",".");
				echo $gia;
				echo" đ";
				echo "<br>";
				echo "<br>";
				echo "<form>";
					echo "<input type='hidden' name='thamso' value='gio_hang' > ";
					echo "<input type='hidden' name='id' value='".$_GET['id']."' > ";
					
					echo "<input type='text' name='so_luong' value='1' style='width:50px' > ";
					echo "<input type='submit' value='Thêm vào giỏ' style='margin-left:15px' > ";
				echo "</form>"; 
			echo "</td>";
		echo "</tr>";
		echo "<tr>";
			echo "<td colspan='2' >";
				echo "<br>";
				echo "<br>";
				echo"<div >";
				
				echo "<b>Giới Thiệu Sản Phẩm</b>";
				echo"</div>";
				echo $tv_2['noi_dung'];
			echo "</td>";
		echo "</tr>";
	echo "</table>";


mysqli_close($conn);
?>