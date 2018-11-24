<?php
// On teste si les variables sont définies et on récupère les champs de Accueil.php
	if(isset($_POST['email1']) && isset($_POST['Motdepasse'])){
		$email1=$_POST['email1'];
	    $Motdepasse=$_POST['Motdepasse'];

	    try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
        catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

	    $connexion = $bdd->query("SELECT * FROM members WHERE Email = '$email1' AND Login = '$Motdepasse'");

		if ($connexion->rowCount() == 1) {
			$bdd->query("UPDATE members SET Online = '1' WHERE Email = '$email1';");
			session_start();
			$_SESSION['email1'] = $_POST['email1'];
			$_SESSION['motdepasse'] = $_POST['Motdepasse'];
			$_SESSION['loginok'] = true;

			if ($_SERVER['SERVER_NAME']=="localhost"){
                header('Location:http://localhost/IGHug/Hub.php');
            }
            else {
                header('Location:http://'.$_SERVER['SERVER_NAME'].':8080/IGHug/Hub.php');
            }
		}
		else {
		    if ($_SERVER['SERVER_NAME']=="localhost"){
			    header('Location:http://localhost/IGHug/Accueil.php');
		    }
		    else{
                header('Location:http://'.$_SERVER['SERVER_NAME'].':8080/IGHug/Accueil.php');
		    }
        }
	}
?>