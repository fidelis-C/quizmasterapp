<?php   

include "inc/db.php";

session_start();

$user = $_SESSION['user'];

if(isset($_GET['1'], $_GET['2'], $_GET['3'], $_GET['4'], $_GET['5'])){



	

	$chk1 = $_GET['1'];

	$chk2 = $_GET['2'];

	$chk3 = $_GET['3'];

	$chk4 = $_GET['4'];

	$chk5 = $_GET['5'];

	

	//question 1 section



	$stm1 = "select * from questions where option1 or option2 or option3 or right_option = '$chk1' ";



	$q1 = mysqli_query($con, $stm1);

	$row1 = mysqli_fetch_assoc($q1);



 //question 2 section



	$stm2 = "select * from questions where option1 or option2 or option3 or right_option = '$chk2' ";



	$q2 = mysqli_query($con, $stm2);

	$row2 = mysqli_fetch_assoc($q2);



 //question 3 section



$stm3 = "select * from questions where option1 or option2 or option3 or right_option = '$chk3' ";



	$q3 = mysqli_query($con, $stm3);

	$row3 = mysqli_fetch_assoc($q3);





	 //question 4 section



$stm4 = "select * from questions where option1 or option2 or option3 or right_option = '$chk4' ";



	$q4 = mysqli_query($con, $stm4);

	$row4 = mysqli_fetch_assoc($q4);



	//question 5 section



	$stm5 = "select * from questions where option1 or option2 or option3 or right_option = '$chk5' ";



	$q5 = mysqli_query($con, $stm5);

	$row5 = mysqli_fetch_assoc($q5);



	if($chk1 == $row1['right_option']){

		?>

		<style type="text/css">

			.opt1{

				display: block !important;

			}

		</style>

		<?php

		$stm2 = "update users set Score = 3 + Score where Name = '$user'";

		mysqli_query($con, $stm2);

	}

	else{

		?>

		<script type="text/javascript">

			document.getElementsByClassName('opt1')."asset/img/bad.png"



		</script>

		<style type="text/css">

			.opt1{

				display: block !important;

				content: url('http://localhost/quizclub/asset/img/bad.png');

			}

		</style>

		<?php

	}



if($chk2 == $row2['right_option']){

		?>

		<style type="text/css">

			.opt2{

				display: block !important;

			}

		</style>

		<?php

		$stm2 = "update users set Score = 3 + Score where Name = '$user'";

		mysqli_query($con, $stm2);

	}

	else{

		?>

		<script type="text/javascript">

			document.getElementsByClassName('opt2')."asset/img/bad.png"



		</script>

		<style type="text/css">

			.opt2{

				display: block !important;

				content: url('http://localhost/quizclub/asset/img/bad.png');

			}

		</style>

		<?php

	}



	if($chk3 == $row3['right_option']){

		?>

		<style type="text/css">

			.opt3{

				display: block !important;

			}

		</style>

		<?php

		$stm3 = "update users set Score = 3 + Score where Name = '$user'";

		mysqli_query($con, $stm3);

	}

	else{

		?>

		<script type="text/javascript">

			document.getElementsByClassName('opt3')."asset/img/bad.png"



		</script>

		<style type="text/css">

			.opt3{

				display: block !important;

				content: url('http://localhost/quizclub/asset/img/bad.png');

			}

		</style>

		<?php

	}



if($chk4 == $row4['right_option']){

		?>

		<style type="text/css">

			.opt4{

				display: block !important;

			}

		</style>

		<?php

		$stm4 = "update users set Score = 3 + Score where Name = '$user'";

		mysqli_query($con, $stm4);

	}

	else{

		?>

		<script type="text/javascript">

			document.getElementsByClassName('opt4')."asset/img/bad.png"



		</script>

		<style type="text/css">

			.opt4{

				display: block !important;

				content: url('http://localhost/quizclub/asset/img/bad.png');

			}

		</style>

		<?php

	}



if($chk5 == $row5['right_option']){

		?>

		<style type="text/css">

			.opt5{

				display: block !important;

			}

		</style>

		<?php

		$stm5 = "update users set Score = 3 + Score where Name = '$user'";

		mysqli_query($con, $stm4);

	}

	else{

		?>

		<script type="text/javascript">

			document.getElementsByClassName('opt5')."asset/img/bad.png"



		</script>

		<style type="text/css">

			.opt5{

				display: block !important;

				content: url('http://localhost:8080/quizclub/asset/img/bad.png');

			}

		</style>

		<?php

	}

}

?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

	

	<title>Precious Stones Quiz</title>

	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="asset/css/main7.css">

	<style>

li::before{





}

.opt1, .opt2, .opt3, .opt4, .opt5{

	position: absolute;

	left: 50%;

	display: none;

}

canvas{

	



}

</style>

<script type="text/javascript">

	//properties

	

</script>

</head>

<body style = "">



	<div class="main-cover">



	<?php

	$stm15 = "select * from users where Name = '$user'";

	$que15 = mysqli_query($con, $stm15);

	$row15 = mysqli_fetch_assoc($que15);

?>

<div class="player-profile">

	<div class="player-tools-case">



</div>



<img style = "border-radius: 360px;border: 10px solid blue;width: 200px; height: 200px;" src="admin/<?php echo $row15['profile'];?>">

<br>

<?php 

echo "<span class = 'player-name'><b>".$row15['Name']."\n".$row15['lastname']."</b></span><hr>";

?>

</div>

<br>

<br>

<?php include "inc/score.php";?>



<div class="time">



<p id="sec">0 </p>

   <span id = "min"> </span>

   <span id = "sep">:</span>

    

   <span id="nano"> </span>



</div>

<?php

	include "inc/header.php";

$stm = "select * from questions";

$q = mysqli_query($con, $stm);

while($row = mysqli_fetch_assoc($q)){

?>



<br>



<form action="#" method="GET">

<h3 style="background-color: black; width: 60%;" class = "question_header"><?php echo $row['question'];?></h3>

<label>

<p class="options"><input name ="<?php echo $row['id'];?>" type="radio" value = "<?php echo $row['option1'];?>"> <?php echo $row['option1'];?><img class="<?php echo 'opt'.$row['id'];?>" src="asset/img/good.png" id = ""></p>



</label>



<br>

<label> 

	<p class="options"><input type="radio" name="<?php echo $row['id'];?>" value = "<?php echo $row['option2'];?>">

	<?php echo $row['option2'];?></p>

</label>

<br>



<label>

<p class="options"><input type="radio" name= "<?php echo $row['id'];?>" value = "<?php echo $row['option3'];?>"> <?php echo $row['option3']?></p>

	</label>

<?php }?>

<br>

<input class="submit btn btn-default" type="submit" name="submit" value="Submit">



</form>



<canvas id = "canvas">



	</canvas>



	<script type="text/javascript">

		let nanoSec = 0

		let sec = 0

		let min = 0



		/**document.getElementById('min').style.color = "red"

*/

		var x = document.getElementById('canvas')

		function draw(){



			nanoSec +=1



			document.getElementById('sec').innerHTML = sec



			document.getElementById('nano').innerHTML = nanoSec



			document.getElementById('min').innerHTML = min





		ctx = x.getContext('2d')

		ctx.beginPath()

		ctx.fillStyle = "white"

		ctx.clearRect(10,10,x.width, x.height)

		ctx.fillText("Timer:\t"+nanoSec+"\t:"+sec+"\t:"+min,20,20)



		ctx.fill()

		ctx.closePath()



		if(nanoSec == 60){

			sec+=1

			

			

			nanoSec=0

		}



		if(sec == 60){

			min+=1



			sec = 0

		}



		if(sec == 30){

		document.getElementById('sec').style.color = "pink"



		}



		if(sec == 40){

		document.getElementById('sec').style.color = "red"



		}



		if(min == 1){

			alert("Time Reached")

		}





	}

	



	setInterval(draw, 5)



	</script>



<br>





	<footer>

		<?php include "inc/footer.php";?>

	</footer>

</div>

</body>

</html>