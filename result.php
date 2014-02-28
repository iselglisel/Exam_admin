<?php 
require_once('config.php');
require_once('ExamDAO.php');


$answers = $_SESSION['answers'] ;
$result = ExamDAO::checkAnswers($answers);

 ?>
<html>
<head>
	<title>Questionnaire</title>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.min.css" >
	<link rel="stylesheet" type="text/css" href="css/questyle.css">
	
</head>
<body>
	<div id ="loginName" style="margin-top:100px;margin-left:300px"><?php echo $_SESSION['email']; ?></div>
	<div class="span12">
		<div class="row">
			<div class="navbar navbar-fixed-top">
        		<div class="navbar-inner">
          			<div class="container">
            			<a href="index.html" class="brand brand-bootbus">Result</a>
            				<div class="nav-collapse collapse">        
              					<ul class="nav pull-right">
				                 <li><a href="index.php">Home</a></li>           
				                 <li><a href="signOut.php">Sign Out</a></li>
              					</ul>
            				</div>
          			</div>
        		</div>
      		</div>
      	</div>
     </div>
		<div class="well" align="center">
			<font size="6PX">Congratulations!! you got ..</font> <?php echo "<h1>Score: ".$result."</h1>";?>
		</div>
	</div>
</body>
</html>
<script src="jquery.1.10.2.js"></script>
<script type="text/javascript"></script>
