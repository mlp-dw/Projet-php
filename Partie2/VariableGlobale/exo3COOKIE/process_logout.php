<?php 
    
if (isset($_COOKIE['email'])) {
    setcookie('email', '',time()-3600); 
    setcookie('message', '',time()-3600); 
    setcookie('nom', '',time()-3600); 
    setcookie('prenom', '',time()-3600); 
    setcookie('age', '',time()-3600); 
    setcookie('password', '',time()-3600); 
}
header('Location: page4.php');