<?php 
session_start();
require_once('config.php');
require_once('ExamDAO.php');

if(!empty($_POST['emailadd']) && !empty($_POST['password'])){
	$email = $_POST['emailadd'];
	$pass = $_POST['password'];
	$_SESSION['email'] = $_POST['emailadd'];

	$result = ExamDAO::getUser($email, $pass);

	if ($result['email'] == $email && $result['pass'] == sha1($pass)){
			echo "<script>alert('Successfully Log In!');</script>";
			//--actually it is 'Location: adminfrontPage/adminPanel.php'--//
			header('Location: question.php');
		}else{
				echo "<script>alert('Wrong email or Password');window.location.href='signIn.php';</script>'";
		}

}else{
	header('location:signIn.php');
}

 ?>