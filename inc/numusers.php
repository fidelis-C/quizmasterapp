<?php 
$stm = "select * from users";
$q = mysqli_query($con, $stm);
$n = mysqli_num_rows($q);
$r = mysqli_fetch_assoc($q);
echo "<p class = 'users'>Users:\t{$n}";

?>