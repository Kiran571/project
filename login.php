<?php
if (isset($_POST['login-submit'])) {

	require 'dbh.inc.php';

	$mailuid=$_POST['mailuid'];
	$password=$_POST['pwd'];

	if (empty($mailuid) || empty($password)) {
		header("Location: index.php?error=emptyfields");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE uidUser=? OR emailUsers=?;";
		$stmt=mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt,$sql)) {
			header("Location: header.php?error=sqlerror");
			exit();
		}
		else{

			$stmt->bind_param("ss",$mailuid,$mailuid);
			mysqli_stmt_excute($stmt);
			$result=mysqli_stmt_get_result($stmt);

		if ($row=mysqli_fetch_assoc($result)) {
			$pwdCheck=password_verify($password,$row['pwdUsers']);
			if ($pwdCheck==false) {
				header("Location: index.php?error=wrongpwd");
				exit();
			}
			elseif ($pwdCheck==true) {
				session_start();
				$_SESSION['userId']=$row['idUsers'];
				$_SESSION['userUid']=$row['uidUsers'];

				header("Location: header.php?login=success");
				exit();



			}
			else{
				header("Location: index.php?error=wrongpwd");
				exit();
			}
		}
		else{
			header("Location: index.php?error=nouser");
			exit();
		}


		}


	}

}
else{
	header("Location: header.php");
	exit();
}
