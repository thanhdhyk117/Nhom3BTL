<?php
include "ket_noi.php";
	session_start();
	if(isset($_SESSION['username'])){
		echo "Xin chao ".$_SESSION['username'];
		header("location:index.php");
		}
	else{	
		
		if(isset($_POST['btn_dangnhap'])){
			$sql=mysqli_query($conn, 'select * from users where username="'.$_POST['user'].'"and password="'.$_POST['pass'].'"');
			$count=mysqli_num_rows($sql);
			
			if($count>0){
				echo '<script>alert ("Đăng nhập thành công.Xin Chào "'.$_POST['user'].')'.'</script>';
				$_SESSION['username']=$_POST['user'];
				header('Location: index.php');
			}
			else{
				echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu")</script>';
			}
		}
	}
mysqli_close($conn);
?>