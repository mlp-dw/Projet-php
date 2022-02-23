<?php include "header.php"; ?>
<?php
$jour = date("Y-m-d");
$maDate = strtotime($jour."- 20 days");

echo "<h3>Je viens de retourner 20 jours dans le passé : " . date("Y-m-d",$maDate) . "</h3>";
?>



<?php include "footer.php"; ?>