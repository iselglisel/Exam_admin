<?php 
	include_once('dbconfig.php');

class adminDAO {

	public static function viewQuestions() {
		global $db;

		try{
			$sql = "SELECT * FROM question";
			$result = $db->query($sql);
			$array = array();
			if($result->num_rows > 0){
				while($record = $result->fetch_assoc()){
					$array[] = $record;
				}	
				return $array;
			}else{
				return false;
			}
		}catch(Exception $e){
			error_log($e->getMessage());
			return false;
		}
	}
	public static function deleteQuestions($id){
		global $db;

		try{
			$sql = "DELETE FROM question WHERE id= '{$id}'";
			$result = $db->query($sql);
			return $result;
		}catch (Exception $e) {
			error_log($e->getMessage());
			return false;
		}
	}
	public static function getAdmin($admin) {
		global $db;

		try {
			$sql = "SELECT * FROM admin WHERE email = '{$admin}'";
			$result = $db->query($sql);
			if (!empty($result)) {
				$getAdmin = $result->fetch_assoc();
				$result->free();
				return $getAdmin;
			} else {
				return false;
			}

		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}
	public static function addnewQuestion($question, $nchoice1, $nchoice2, $nchoice3, $nchoice4, $nanswer) {
		global $db;
		if (!$question) return false;

		try {
			$sql = "INSERT INTO question (questionnaire, opt1, opt2, opt3, opt4, answer) VALUES('$question', '$nchoice1', '$nchoice2', '$nchoice3', '$nchoice4', '$nanswer')";
			$result = $db->query($sql);
			if (!empty($result)){
				return $result;
			} else {
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}
	public static function getEditQuestion($id) {
		global $db;
		try{
			if(!empty($result)){
				$getEdit = $result->fetch_assoc();
				$result->free();
				return $getEdit;
			} else {
				return false;
			}
			
		} catch (Exeption $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public static function editQuestion($id,$edit_question,$edit_choiceA,$edit_choiceB,$edit_choiceC,$edit_choiceD,$edit_answer) {
		global $db;

		try {
			$sql = "UPDATE question SET questionnaire ='$edit_question', opt1 = '$edit_choiceA', opt2 = '$edit_choiceB', opt3 = '$edit_choiceC', opt4 = '$edit_choiceD', answer = '$edit_answer' WHERE id = '{$id}'";
			$result = $db->query($sql);
			if(isset($result) && !empty($result)){
				return $result;
			} else {
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
			return false;
		}
	}

	public static function adminLogIn($email,$password) {
		global $db;

		try {
			$sql = "SELECT * FROM admin WHERE email = '{$email}' AND password = '{$password }'";
			$result = $db->query($sql);
			if(!empty($result)){
				$admin = $result->fetch_assoc();
				$result->free();
				return $admin;
			} else {
				return false;
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			error_log('An Error Occur!');
		}
	}

	
}

?>