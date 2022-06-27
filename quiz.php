
<?php 
include "inc/db.php";
session_start();
$user = $_SESSION['user'];

include "inc/header.php";
$stm3 = "select * from questions";
	$que3 = mysqli_query($con, $stm3);
	$row = mysqli_fetch_assoc($que3);

$stm2 = "select * from questions where id = 1";
$que2 = mysqli_query($con, $stm2);

$stm10 = "select * from questions where id = 2";
$que3 = mysqli_query($con, $stm10);
$row10 = mysqli_fetch_assoc($que3)
?>

<head>
	<link rel = "stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel = "stylesheet" type="text/css" href="asset/css/main1.css">
	<script type="text/javascript" src = "asset/js/jquery-3.1.1.min.js"></script>
</head>
<body>
	<?php $user_score1 = 0;
		$user_score2 = 0;
		$user_score3 = 0;
		$user_score4 = 0;
		$user_score5 = 0;
		$user_score6 = 0;

	?>
	<p id = "score" name = "score">Score:</p>
	<script type="text/javascript">

		function trans1(){
			
		}

		var score = 0
	function trans(){

		
		var ans = "<?php echo $row['right_option'];?>"
		var ans2 = "<?php echo $row10['right_option'];?>"


		var opt1 = document.getElementById('option1')
		var opt2 = document.getElementById('option2')
		var opt3 = document.getElementById('option3')

		if(opt1.checked == true && opt2.checked == true){
			alert("two answers checked, wrong input")
		}else if
			(opt1.checked == true && opt2.checked == true && opt3.checked ==true){
				alert("Three options checked, wrong input")
		}

		else if(opt1.checked){
			if(opt1.checked == true){
				if(opt1.value == ans){
					score +=2
					var s1 = "<?php $user_score1 +=2;?>"
					alert("correct")
				document.getElementById("score").innerHTML = score
				
					
				}
				else{
					score -=2
				var s1 = "<?php $user_score5 -=2;?>"
				document.getElementById("score").innerHTML = score - 2
				}
			}
			
			
		}
		else if(opt2.checked){
			if(opt2.checked == true){
				if(opt2.value == ans){
					score +=2
					var s2 = "<?php $user_score2 +=2;?>"
			document.getElementById("score").innerHTML = score
			}
			else{
				score -=2
				var s2 = "<?php $user_score5 -=2;?>"
				document.getElementById("score").innerHTML = score - 2
			}
			
		}
	}
	else if(opt3.checked){
			if(opt3.checked == true){
				if(opt3.value == ans){
					score +=2
					var s3 = "<?php $user_score3 +=2;?>"
			document.getElementById("score").innerHTML = score
			}
			else{
				score -=2
				var s3 = "<?php $user_score5 -=2;?>"
				document.getElementById("score").innerHTML = score - 2
			}
			
		}
	}
		else {
			alert();
		}

		//second question

		var opt4 = document.getElementById('option4')
		var opt5 = document.getElementById('option5')
		var opt6 = document.getElementById('option6')

		if(opt4.checked == true && opt5.checked == true){
			alert("two answers checked, wrong input")
		}else if
			(opt4.checked == true && opt5.checked == true && opt6.checked ==true){
				alert("Three options checked, wrong input")
		}

		else if(opt4.checked){
			if(opt4.checked == true){
				if(opt4.value == ans2){
					score +=2
					var s4 = "<?php $user_score4 +=2;?>"
				document.getElementById("score").innerHTML = score
				
					
				}
				else{
					var s4 = "<?php $user_score4 -=2;?>"
				document.getElementById("score").innerHTML = score - 2
				}
			}
			
			
		}
		else if(opt5.checked){
			if(opt5.checked == true){
				if(opt5.value == ans2){
					score +=2
					var s5 = <?php $user_score5 +=2;?>
			document.getElementById("score").innerHTML = score
			}
			else{
				score -=2
				var s5 = "<?php $user_score5 -=2;?>"
				document.getElementById("score").innerHTML = score - 2
			}
			
		}
	}
	else if(opt6.checked == true && opt6.value == ans2){
				
					score +=2
					var s6 = "<?php $user_score6 +=2;?>"
	
			document.getElementById("score").innerHTML = score
			
			}
			
			else if(opt6.checked == false){
				var s6 = "<?php $user_score6 +=0;?>"
			}
	
		else {
		
		}
}
	
		var total = "<?php $t = $user_score1 + $user_score2 + $user_score3 + $user_score4 + $user_score5 + $user_score6;?>"

		x = document.getElementById("score").innerHTML

	</script>
	
	<?php
	function us(){
	echo $ts ="<script>document.write(score)</script>";

	return $ts;
}
us();
	if(isset($_GET['result'])){


	$upstm = "update users set Score = '$t' + Score where Name = '$user'";
	mysqli_query($con, $upstm);
	echo $t;
}

	while($row = mysqli_fetch_assoc($que2)){
	
	echo "<br>"."<b>".$row['question']."</b><br><br>";
	echo "{$row['option1']}\t<input id = 'option1' name = 'option1' type = 'checkbox' value = '{$row['option1']}'><br><br>
	
	{$row['option2']}\t<input id = 'option2' name = 'option2' type = 'checkbox' value = '{$row['option2']}'><br><br>

	{$row['option3']}\t<input id = 'option3' name = 'option3' type = 'checkbox' value = '{$row['option3']}'><br><br>

	";
}

$stm10 = "select * from questions where id = 2";
$que3 = mysqli_query($con, $stm10);
while($row10 = mysqli_fetch_assoc($que3)){

echo "<br>"."<b>".$row10['question']."</b><br><br>";
	echo "{$row10['option1']}\t<input id = 'option4' name = 'option1' type = 'checkbox' value = '{$row10['option1']}'><br><br>
	
	{$row10['option2']}\t<input id = 'option5' name = 'option2' type = 'checkbox' value = '{$row10['option2']}'><br><br>

	{$row10['option3']}\t<input id = 'option6' name = 'option3' type = 'checkbox' value = '{$row10['option3']}'><br><br>

	
	";
}

$stm30 = "select * from questions where id = 3";
$que30 = mysqli_query($con, $stm30);
while($row30 = mysqli_fetch_assoc($que30)){

echo "<br>"."<b>".$row30['question']."</b><br><br>";
	echo "{$row30['option1']}\t<input id = 'option4' name = 'option1' type = 'checkbox' value = '{$row30['option1']}'><br><br>
	
	{$row10['option2']}\t<input id = 'option5' name = 'option2' type = 'checkbox' value = '{$row30['option2']}'><br><br>

	{$row30['option3']}\t<input id = 'option6' name = 'option3' type = 'checkbox' value = '{$row30['option3']}'><br><br>

	
	";
}

?>

<button id = "submit" class="btn-primary" onclick="trans()" name = "result">Submit</button>

<script type="text/javascript">
	$(document).ready(function(){
		$('#submit').click(function(e){
			e.preventDefault();

			var tscore = $("#score").text;
			var tl = $("#uscore").val = tscore;

			$.ajax({

				type: "POST",
				url: "/quiz.php",
				dataType: "json",
				data: {name:tscore, totals:tl};

			});
		});
		});

</script>
</body>
