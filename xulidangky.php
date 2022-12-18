<?php
include "ket_noi.php";
	if(isset($_POST['btn_dangki']))
	{
		$username=$_POST['user'];
		$password=$_POST['pass'];
		$ten=$_POST['ten'];
		$email=$_POST['email'];
		
		if($username=="" || $password=="" || $ten==""|| $email=="")
			{
				echo '<script>alert("Vui lòng nhập đầy đủ thông tin")</script>';
			}
		else{
				$sql="INSERT INTO users(username, password, tennsd, email) VALUES (
									  	'$username',
										'$password',
										'$ten',
										'$email')";
					if(mysqli_query($conn,$sql)){
						echo '<script>alert("Đăng ký thành công")</script>';
						header('Location: login_SignUp.php');
					}else{
						echo '<script>alert("Đăng ký không thành công")</script>';
					}
			}	
	}
	mysqli_close($conn);
?>