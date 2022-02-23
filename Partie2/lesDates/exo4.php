<?php include "header.php"; ?>

<?php
date_default_timezone_set('Europe/Paris');
$t1 = mktime(15, 0, 0, 8, 2, 2016);
echo "<h3>Il y a : " . $t1 . " secondes écoulées jusqu'au mardi 2 août 2016 à 15h00. </h3>";
echo "<h3>Il y a : " . time() . " secondes écoulées depuis le 1 janvier 1970. </h3>";
?>




<?php include "footer.php"; ?>