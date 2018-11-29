<?php

<<<<<<< HEAD
session_start();
$ID = $_SESSION['id'];

$Nom = $_GET['nom'];
$Prenom = $_GET['prenom'];
$Mail = $_GET['mail'];
$Login = $_GET['login'];
$Description = $_GET['description'];
=======
if (isset($_POST['nvnom']) && isset($_POST['nvprenom']) && isset($_POST['nvemail']) && isset($_POST['nvlogin'])) {
    $prenom=$_POST['nvprenom'];
    $nom=$_POST['nvnom'];
    $email=$_POST['nvemail'];
    $login=$_POST['nvlogin'];
>>>>>>> ab19fc7bbc941935257d719a9f523239c452ace3

    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
    catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

<<<<<<< HEAD
     $bdd->query("UPDATE members SET Name ='$Prenom', Surname = '$Nom', EMail = '$Mail', Login = '$Login', Description = '$Description' WHERE ID = '$ID'");

?>
=======
    $bdd->query("UPDATE 'members' SET 'Name'='$prenom', 'Surname'='$nom', 'Email'='$email', 'Login'='$login' WHERE 'Name'='$nom'");
}
header('Location:http://localhost/IGHug/Hub.php');
?>



>>>>>>> ab19fc7bbc941935257d719a9f523239c452ace3
