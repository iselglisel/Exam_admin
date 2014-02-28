<?php 
class adminHandler {

	public function getAdmin($admin) {

		if (empty($admin)) {
			return false;
		}

		$getadmin = AdminDAO::getAdmin($admin);

		if (empty($getadmin)) {
			return false;
		} else {
			return $getadmin;
		}
	}

	public function adminLogIn($email,$pass) {

		if (empty($email)) {
			return false;
		} 

		if (empty($pass)) {
			return false;
		}

		$logAdmin = AdminDAO::adminLogIn($email,$password);

		if (empty($logAdmin)) {
			return false;
		} else {
			return $logAdmin;
		}
	}
	public function viewQuestion($viewId) {

		if (empty($viewId)) {
			return false;
		}

		$view = AdminDAO::viewQuestion($viewId);

		if (empty($view)) {
			return false;
		} else {
			return $view;
		}
	}
	public function deleteQuestion($delId) {

		if (empty($delId)) {
			return false;
		}

		$del = AdminDAO::deleteQuestion($delId);

		if (empty($del)) {
			return false;
		} else {
			return $del;
		}
	}
	public function addQuestion($question,$choice1,$choice2,$choice3,$choice4,$answer) {
		try{

			if (empty($question)) {
				return false;
			}

			if (empty($$choice1)) {
				return false;
			}

			if (empty($$choice2)) {
				return false;
			}

			if (empty($choice3)) {
				return false;
			}

			if (empty($choice4)) {
				return false;
			}

			if (empty($answer)) {
				return false;
			}

		$addQuest = AdminDAO::addQuestion($question,$choice1,$choice2,$choice3,$choice4,$answer);

			if (empty($addQuest)) {
				return false;
			} else {
				return $addQuest;
			}
		}catch(Exception $e){
			error_log($e->getMessage());
			return false;
		}
	}

	public function testGetEditQuestion($id) {
		// try {
		// 	$result = 
		// } catch(Exception $e) {
		// 	error_log($e->getMessage());
		// 	return false;
		// }
	}
}


 ?>