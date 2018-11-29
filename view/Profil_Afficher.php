<?php

$ID = 2;

try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query('SELECT * FROM members WHERE id='.$ID);
$donnees = $reponse->fetch()
?>

    <form method="post" action="Profil_Modifier.php">
        <div class="form-group">
            <textarea name="description" type="text" placeholder="<?php echo $donnees['Description']; ?>" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input name="nvnom" type="nom" class="form-control" placeholder="<?php echo $donnees['Surname']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <input name="nvprenom type="prenom" class="form-control" placeholder="<?php echo $donnees['Name']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <input name="nvemail" type="email" class="form-control" placeholder="<?php echo $donnees['Email']; ?>" maxlength="40">
        </div>
        <div class="form-group">
            <input name="nvlogin" type="password" class="form-control" placeholder="<?php echo $donnees['Login']; ?>" maxlength="20">
        </div>
        <div class="Submit2">
            <input type="submit" class="but2" value="Modifier">
        </div>
    </form>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>