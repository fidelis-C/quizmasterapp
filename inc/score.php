<?php 
$stm3 = "select * from users where Name = '$user'";

$q = mysqli_query($con, $stm3);
$row3 = mysqli_fetch_assoc($q);
echo "<p class = 'score'>My score:\t{$row3['Score']}";

?>