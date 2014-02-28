<?php 
	include_once('adminDAO.php');

	$id = $_GET['id'];
	$result = adminDAO::getEditQuestion($id);
 ?>

<html>
  <head>
 	<title>Edit Question</title>
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

 </head>
 <body>
 	<h1 class = "font">&nbsp;&nbsp;Online Examination</h1>
 				
 		<div class="container">
 			<div class = "span6 offset3" style = "margin-top:80px">
 				<div class = "page-header">
 					<h2 class = "font9">Edit Questionnaire</h2>
 				</div>
 				<div class = "thumbnail span5">
 					<form method = "POST" action = "editActionQuestion.php">
 						<table align = "center" class = "margTable">
 							<tr>
 								<td><input type = "hidden" class = "btn" name = "edit_id" value = "<?php echo $result['id'] ?>" /></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Question:</font></label></td>
 								<td><font class = "viewfontAdmin"><textarea class = "btn" name = "edit_question"><?php echo $result['questionnaire'] ?></textarea></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice A:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceA" value = "<?php echo $result['opt1'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label>Choice B:</label></td>
 								<td><input type = "text" class = "btn" name = "edit_choiceB" value = "<?php echo $result['opt2'] ?>"></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice C:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceC" value = "<?php echo $result['opt3'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Choice D:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_choiceD" value = "<?php echo $result['opt4'] ?>"></font></td>
 							</tr>
 							<tr>
 								<td><label><font class = "viewfontAdmin">Answer:</font></label></td>
 								<td><font class = "viewfontAdmin"><input type = "text" class = "btn" name = "edit_answer" value = "<?php echo $result['answer'] ?>"></font></td>
 							</tr>
 						</table>
 						<hr>
 						<div class="pull-right">
 							<input type = "submit" class = "btn btn-success" value ="Update Question" />
 						</div>
 					</form>
 				</div>
 			</div>
 		</div>
 	</div>
 <script src = "../../assets/js/jquery.1.10.2.js"></script>	
 <script src = "../js/my_java.js"></script>
 </body>
 </html>
 <?php ?>