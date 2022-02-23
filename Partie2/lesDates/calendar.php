<?php include "header.php"; ?>


<form method="post">
        <label>Mois</label>
    <label>Années</label>
    <select name="Year">
        <option value="(undefined)">Choisis une Années</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
    </select>
    <select name="Month">
        <option value="(undefined)">Choisis un Mois</option>
        <option value="janvier">Janvier</option>
        <option value="fevrier">Février</option>
        <option value="mars">Mars</option>
        <option value="avril">Avril</option>
        <option value="mai">Mai</option>
        <option value="juin">Juin</option>
        <option value="juillet">Juillet</option>
        <option value="aout">Aout</option>
        <option value="septembre">Septembre</option>
        <option value="octobre">Octobre</option>
        <option value="novembre">Novembre</option>
        <option value="decembre">Décembre</option>
    </select>
    <button type="submit">Valider</button>
</form>
<img src="https://icalendrier.fr/media/imprimer/<?= $_POST['Year']; ?>/mensuel/<?= $_POST['Month']; ?>/calendrier-<?= $_POST['Month']; ?>-<?= $_POST['Year']; ?>-bigthumb.png" />
<p><?php echo  $_POST['Year']. $_POST['Month'];?></p>

<?php include "footer.php"; ?>