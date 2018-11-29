<?php

$ID = $_SESSION['id'];

try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query("SELECT * FROM members WHERE id='$ID'");
$donnees = $reponse->fetch()
?>

    <form method="post" onsubmit="return false">
        <div class="form-group">
            <input id="nvnom" type="nom" class="form-control" value="<?php echo $donnees['Surname']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <input id="nvprenom" type="prenom" class="form-control" value="<?php echo $donnees['Name']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <input id="nvemail" type="email" class="form-control" value="<?php echo $donnees['Email']; ?>" maxlength="40">
        </div>
        <div class="form-group">
            <input id="nvlogin" type="password" class="form-control" value="<?php echo $donnees['Login']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <textarea id="nvdescription" type="text" class="form-control"><?php echo $donnees['Description']; ?></textarea>
        </div>
        <div class="Submit2">
            <input type="submit" class="but2" value="Modifier">
        </div>
    </form>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>