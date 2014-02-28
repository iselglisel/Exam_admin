<?php 
include_once('dbconfig.php');
require_once('adminDAO.php');

$id = $_GET['id'];

$result = adminDAO::deleteQuestions($id);

if (!empty($result)) {
	echo "<script>alert('Delete Successfully');window.location.href='viewQuestions.php';</script>";
} else {
	echo "<script>alert('Unable to delete Questionnaire!');window.location.href='viewQuestions.php';</script>";
}

 ?>