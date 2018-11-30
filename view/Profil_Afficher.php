<?php

$ID = $_SESSION['id'];

try {$bdd = new PDO('mysql:host=localhost;dbname=ighug_db', 'root', 'KQS9yx6niikArAf4',array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));}
catch (Exception $e) {die('Erreur : ' . $e->getMessage());}

$reponse = $bdd->query("SELECT * FROM members WHERE id='$ID'");
$donnees = $reponse->fetch();

?>

    <form method="post" onsubmit="return false">
        <div class="form-group">
            <label for="nvnom">Modifier mon nom :</label>
            <input id="nvnom" type="nom" value="<?php echo $donnees['Surname']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <label for="nvprenom">Modifier mon prenom :</label>
            <input id="nvprenom" type="prenom" value="<?php echo $donnees['Name']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <label for="nvemail">Modifier mon email :</label>
            <input id="nvemail" type="email" value="<?php echo $donnees['Email']; ?>" maxlength="40">
        </div>
        <div class="form-group">
            <label for="nvlogin">Modifier mon password :</label>
            <input id="nvlogin" type="password" value="<?php echo $donnees['Login']; ?>" maxlength="20">
        </div>
        <div class="form-group">
            <label for="nvdescription">Modifier ma description :</label>
            <textarea id="nvdescription" type="text"><?php echo $donnees['Description']; ?></textarea>
        </div>
        <div class="Submit2">
            <input type="submit" class="but2" value="Modifier">
        </div>
    </form>

<?php

$reponse->closeCursor(); // Termine le traitement de la requête

?>