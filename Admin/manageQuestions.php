<html>
<head>
	<title>Admin page</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css">
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/myStyle.css" >
</head>
<body>
	<h1>Add New Questions</h1>
	<form method="POST" action="addnewQuestions.php">
		<input type="text" name="questions" id="quest" placeholder="Questions" style="height:30px">
		<input type="text" name="choice1" id="opt1" placeholder="Choice">
		<input type="text" name="choice2" id="opt2" placeholder="Choice">
		<input type="text" name="choice3" id="opt3" placeholder="Choice">
		<input type="text" name="choice4" id="opt4" placeholder="Choice">
		<input type="text" name="answers" id="answer" placeholder="Answer">
		<input type="submit" value="Save" class="btn btn-success">
	</form>

</body>
</html>