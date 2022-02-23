<?php

// connexion a la base de donnée

// on se sert de pdo

$pdo = new PDO("mysql:dbname=test;host=localhost", "root", "");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$pdoStmnt = $pdo->prepare("INSERT INTO users SET username = ?, password = ?, email = ?");
$pdoStmnt->execute(['toto', '123456', 'toto@gmail.com']);

echo 'ok';