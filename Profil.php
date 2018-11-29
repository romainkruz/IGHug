<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="icon" href="img/Logo_IGHug.png" />
		<title>Profil</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/style_Hub.css" />
		<link rel="stylesheet" type="text/css" href="css/style_Menu.css" />
        <link href="css/style_Profil.css" rel="stylesheet">
	</head>
	<body>
        <header>
            <?php include("header.php"); ?>
        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="col-md-12">
                        <h6>Modifier mes infos personnelles</h6>
                    </div>
                    <form method="post" action="view/Modifier.php">
                        <div class="form-group">
                            <textarea name="description" type="text" placeholder="Votre description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="nvnom" type="nom" class="form-control" placeholder="Modifier votre Nom" maxlength="20">
                        </div>
                        <div class="form-group">
                            <input name="nvprenom" type="prenom" class="form-control" placeholder="Modifier votre Prénom" maxlength="20">
                        </div>
                        <div class="form-group">
                            <input name="nvemail" type="email" class="form-control" placeholder="Modifier votre Email" maxlength="40">
                        </div>
                        <div class="form-group">
                            <input name="nvlogin" type="password" class="form-control" placeholder="Modifier votre mot de passe"
                                   maxlength="20">
                        </div>
                        <div class="Submit2">
                            <input type="submit" class="but2" value="Modifier">
                        </div>
                    </form>
                </div>

                <div class="col-md-8">
                    <form>
                        <img src="img/couple5.jpg" class="img-fluid" alt="Responsive image" id="couple">
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
	</body>

</html>


