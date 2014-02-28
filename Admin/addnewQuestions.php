<?php 
require_once('dbconfig.php');


$question = (isset($_POST['questions']) && !empty($_POST['questions']) ? $_POST['questions']:false);
$nchoice1 = (isset($_POST['choice1']) && !empty($_POST['choice1']) ? $_POST['choice1']:false);
$nchoice2 = (isset($_POST['choice2']) && !empty($_POST['choice2']) ? $_POST['choice2']:false);
$nchoice3 = (isset($_POST['choice3']) && !empty($_POST['choice3']) ? $_POST['choice3']:false);
$nchoice4 = (isset($_POST['choice4']) && !empty($_POST['choice4']) ? $_POST['choice4']:false);
$answer = (isset($_POST['answers']) && !empty($_POST['answers']) ? $_POST['answers']:false);

$arr = array(

	'nQuest' => $question,
	'nOpt1' => $nchoice1,
	'nOpt2' => $nchoice2,
	'nOpt3' => $nchoice3,
	'nOpt4' => $nchoice4,
	'nAns' => $answer
	);

$result = adminDAO::addnewQuestion($arr['nQuest'],$arr['nOpt1'],$arr['nOpt2'],$arr['nOpt3'],$arr['nOpt4'],$arr['nAns']);


if($result === false){
	echo "<script>alert('There's an Error');window.location.href='viewQuestions.php';</script>";
}else{
	echo "<script>alert('Successfully Added');window.location.href='viewQuestions.php';</script>";
}
 ?>