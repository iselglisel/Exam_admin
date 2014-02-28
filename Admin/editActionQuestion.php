<?php 

require_once('dbconfig.php');

$edit_id = (isset($_POST['edit_id']) ? $_POST['edit_id']:false);
$edit_question = (isset($_POST['edit_question']) ? $_POST['edit_question']:false);
$edit_choiceA = (isset($_POST['edit_choiceA']) ? $_POST['edit_choiceA']:false);
$edit_choiceB = (isset($_POST['edit_choiceB']) ? $_POST['edit_choiceB']:false);
$edit_choiceC = (isset($_POST['edit_choiceC']) ? $_POST['edit_choiceC']:false);
$edit_choiceD = (isset($_POST['edit_choiceD']) ? $_POST['edit_choiceD']:false);
$edit_answer = (isset($_POST['edit_answer']) ? $_POST['edit_answer']:false);

$arr = array(

	'id' => $edit_id,
	'question' => $edit_question,
	'opt1' => $edit_choiceA,
	'opt2' => $edit_choiceB,
	'opt3' => $edit_choiceC,
	'opt4' => $edit_choiceD,
	'ans' => $edit_answer
	);

$result = adminDAO::editQuestion($arr['id'],$arr['question'],$arr['opt1'],$arr['opt2'],$arr['opt3'],$arr['opt4'],$arr['ans']);


if($result === false){
	echo "<script>alert('There's an Error');window.location.href='viewQuestions.php';</script>";
}else{
	echo "<script>alert('Successfully Edit');window.location.href='viewQuestions.php';</script>";
}
 ?>
 ?>