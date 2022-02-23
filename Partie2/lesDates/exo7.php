<?php include "header.php"; ?>
<?php
$jour = date("Y-m-d");
$maDate = strtotime($jour."+ 20 days");

echo "<h3>Je viens d'ajouter 20 jours à la date du jour : " . date("Y-m-d",$maDate) . "</h3>";
?>



<?php include "footer.php"; ?>