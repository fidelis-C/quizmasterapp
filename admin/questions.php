<?php  
include "../inc/db.php";

$stm = "select * from questions";
$q = mysqli_query($con, $stm);

?>


<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	.hs{
		width: 300px;
		color: blue;
	}
</style>
</head>

<body>
<header>
	
	<?php include "inc/adm.header.php";?>

</header>
<div>
<br>
<legend>Delete| Edit| And Set Questions</legend>
<?php 
while($row = mysqli_fetch_assoc($q)){?>
<table class="table table-striped">

	<thead>
	<tr>
		
		<th>ID</th>
		<th>Question</th>
		<th>Option one</th>
		<th>Option two</th>
		<th>Option three</th>
		<th>Correct answer</th>
		<th>Delete</th>
		<th>Edit</th>

	</tr>
</thead>
<td><?php echo $row['id'];?></td>

<td><h1 class="hs"><?php echo $row['question']; ?></h1></td>
<td><?php echo $row['option1'];?></td>
<td><?php echo $row['option2'];?></td>
<td><?php echo $row['option3'];?></td>
<td><?php echo $row['right_option'];?></td>
<td><a href = 'users.php?del=<?php echo $row7['id']; ?>'>
	<img src = '../asset/img/icons/delete-f.svg'>
</a></td>
<td><a href = 'users.php?update=<?php echo $row7['id']; ?>'><img src = '../asset/img/icons/pen.svg'></a></td>
<?php }?>
</div>
</body>
</html>