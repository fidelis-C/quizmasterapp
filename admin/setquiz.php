<?php 

include "../inc/db.php";

if(isset($_POST['submit'])){

	$quest = $_POST['question'];

	$opt1 = $_POST['option1'];

	$opt2 = $_POST['option2'];

	$opt3 = $_POST['option3'];



	$anw = $_POST['answer'];



	$stm6 = "insert into questions(id, question, option1, option2, option3, right_option) values(null, '$quest', '$opt1', '$opt2', '$opt3', '$anw')";

	mysqli_query($con, $stm6);

}



 ?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	<title></title>

</head>

<body>

<header>

	

<?php include "inc/adm.header.php";?>

</header>

<center>

<div class="adm-reg form-control">

	<legend>SET QUESTION</legend>

<form action="#" method="POST">

	<label>Question</label><br>

	<input class="form-control" type="text" name="question">

	<br><br>

	<label>Option one</label><br>

	<input class="form-control" type="text" name="option1">

	<br><bt>



		<label>Option two</label><br>

	<input class="form-control" type="text" name="option2">

	<br><bt>



		<label>Option three</label><br>

	<input class="form-control" type="text" name="option3">

	<br><bt>



		<label>Answer</label><br>

	<input class="form-control" type="text" name="answer">

	<br><bt>

		<br>

		<input class="btn btn-default" type="submit" name="submit" value="Set question">

	



</form>

</div>

</center>

</body>

</html>