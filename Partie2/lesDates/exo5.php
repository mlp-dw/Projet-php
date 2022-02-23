<?php include "header.php"; ?>

<?php 
$today = date_create('now');
$myDate = date_create('2016-05-16');
$interval = date_diff($myDate, $today);

echo "<h3>Il y a " . $interval->format("%a jours </h3>") ;

?>



<?php include "footer.php"; ?>