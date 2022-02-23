<?php
//on voit si le fichier existe et qu'il ny a pas d'erreur
if (isset($_FILES['file']) && $_FILES["file"]["error"] == 0) {
    //on teste le poids du fichier en octet
    if($_FILES["file"]["size"] <=  1000000) {
        //on verifie si l'extension est autorisée
        $fileinfo  = pathinfo($_FILES["file"]["name"]);
        $extension = $fileinfo["extension"];
        $authorised = ["jpg", "jpeg", "pdf", "png"];

        if(in_array($extension, $authorised)){
            //on valide le fichier et ou on le stock
            move_uploaded_file($_FILES["file"]["tmp_name"], "./upload/" . time() . basename($_FILES["file"]["name"]));
            echo "<p>L'envoi a bien été effectué ! " . $_FILES["file"]["name"] . " dont l'extension est " . $_FILES["file"]["type"] . "</p>";
        }
    }
}

?>