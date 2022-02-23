<?php include "header.php"; ?>

<?php
$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // 31
echo "<h3>Il y avait " . $number . " jours en février 2016. </h3>";
?>

<?php include "footer.php"; ?>