<?php
class ExamDAO {
	public static function getQuestion($id){
		global $db;
		
		$sql = "SELECT questionnaire FROM question WHERE id ='{$id}'";
		$result = $db->query($sql);
		if ($result->num_rows > 0){
			$question = $result->fetch_assoc();
			$result->free();
			return $question;
		} else {
			return false;
		}
	}

	public static function getOption($num){
		global $db;
		$sql = "SELECT * FROM question WHERE quest_num = '$num'";
		$result = $db->query($sql);
		if($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$result->free();
			return $row;
		} else {
			return false;
		}
	}

	public function getUser($email, $pass) {
		global $db;
		try{
			$sql ="SELECT * FROM registration WHERE email = '$email' AND pass = sha1('$pass')";
			$result = $db->query($sql);
			if($result->num_rows > 0){
				$insert = $result->fetch_assoc();
				$result->free();
				return $insert;
			}else{
				return false;
			}
		}catch(Exception $e) {
			error_log($e->getMessage());
			error_log('Error Occur!');
			return false;
		}
	}


	public static function insert($fname, $lname, $email, $pass){
		global $db;

		$query = "INSERT INTO registration (fname, lname, email, pass) VALUES ('$fname','$lname','$email','$pass')";
		$result = $db->query($query);
		header('Location: signIn.php');
		return $result;
	}

	public static function getAnswer( $id, $answer){
		global $db;
		try{
			$query = 'SELECT answer FROM questions ORDER BY id';
			$result = $db->query($query);
			$answers = array();
			while ($rows = $result->fetch_assoc()){
				$answers[] = $row['answer'];
			}
			return $answers;
		} catch (Exeception $e){
			error_log($e->getMessage());
		}
		return false;
	}

	public static function getAllAnswer(){
		global $db;
		$sql = "SELECT answer FROM question ORDER BY id ";
		$result = $db->query($sql);
		$answers = array();
		while($row = $result->fetch_assoc()) {
			$answers[] = $row['answer'];
		}
		return $answers;
	}

	public static function checkAnswers($ans){
		$correct = self::getAllAnswer();

		if($correct === false) {
			error_log("Correct Answers not Ready");
		}

		if (count($correct) != strlen($ans)){
			error_log("Invalid Answers");
			return false;
		}
		$score = 0;
		for ($i = 0; $i < count($correct); $i++) { 
			if ($correct[$i] == $ans[$i]) {
				$score++;
			}
		}

		return $score;
 }
 	public static function viewAllQuestions($id){
 		global $db;

 		try {
 		$sql = "SELECT questionnaire FROM question ORDER by id";
 		$result = $db->query($sql);
 		if($result->num_rows > 0){
				$show = $result->fetch_assoc();
				$result->free();
				return $show;
			}else{
				return false;
			}
		}catch(Exception $e) {
			error_log($e->getMessage());
			error_log('Error Occur!');
			return false;
		}
 	}
}


?>