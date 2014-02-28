<?php 
session_start();
require_once('dbconfig.php');
require_once('adminDAO.php');

if(!empty($_POST['emailadd']) && !empty($_POST['password'])){
	$email = $_POST['emailadd'];
	$pass = $_POST['password'];
	$_SESSION['email'] = $_POST['emailadd'];

	$result = adminDAO::getAdmin($email);

	// if ($result['email'] == $email && $result['pass'] == ($pass)){
	// 		echo "<script>alert('Successfully Log In!');</script>";
			//--actually it is 'Location: adminfrontPage/adminPanel.php'--//
			header('Location: viewQuestions.php');
		}else{
				echo "<script>alert('Wrong email or Password');window.location.href='adminLogin.php';</script>'";
		}

// }else{
// 	header('location:signIn.php');
// }

 ?>