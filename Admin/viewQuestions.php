<?php 
require_once('dbconfig.php');
require_once('adminDAO.php');

$result = adminDAO::viewQuestions();

 ?>
 <html>
 <head>
 	<title>view Questions</title>
 	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
 	<link rel="stylesheet" type="text/css" href="../css/global.css">
 </head>
 <body>
 	<a href="manageQuestions.php" class = "btn btn-primary" style="float:right;margin-top:20px">Add New Questions</a>
 	<div class="well" id="questions">
 		<table class = "table table-bordered table-striped table-condensed">
 			<thead>
 				<tr>
 					<th>Id</th>
 					<th>Question</th>
 					<th>Choice A</th>
 					<th>Choice B</th>
 					<th>Choice C</th>
 					<th>Choice D</th>
 					<th>Answer</th>
 					<th>Action</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php foreach($result as $record): ?>
 				<tr>
 					<td><?php echo $record['id']; ?></td>
 					<td><?php echo $record['questionnaire']; ?></td>
 					<td><?php echo $record['opt1']; ?></td>
 					<td><?php echo $record['opt2']; ?></td>
 					<td><?php echo $record['opt3']; ?></td>
 					<td><?php echo $record['opt4']; ?></td>
 					<td><?php echo $record['answer'];?></td>
 					<td>
 						<a href="editQuestions.php?id=<?= $record['id']; ?>" class = "btn btn-info">Edit</a>
 						<a href="deleteQuestions.php?id=<?= $record['id']; ?>" class = "btn btn-danger">Delete</a>
 					</td>
 				</tr>
 				<?php endforeach; ?>
 			</tbody>
 		</table>
 	</div>
 </body>
 </html>