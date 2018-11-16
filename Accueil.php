<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/Logo_IGHug.png" />

    <title>IGHUG</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style_Accueil.css" rel="stylesheet">

  </head>
  <body>
    <div class="container-fluid">
		<div class="row" id="color_head">
			<div class="col-md-6 form-inline">
				<img id="logo" alt="Logo" src="img\Logo_IGHug_LessIGS_-320x300.png">
				<p id="desc">Le site de rencontre du campus IGS</p>
			</div>
			<div class="col-md-6">
				<form class="form-inline" id="login" method="post" action="view/Connexion.php">
					<div>
						<input name="email1" type="mail" class="form-control" placeholder="Email">
					</div>
					<div>
						<input name="Motdepasse" type="password" class="form-control" placeholder="Mot de passe">
					</div>
					<div class="Submit1">
							<input type="submit" class="but1" value="Se connecter">
					</div>
						<a href="#" id="oubli">J'ai oublié mes identifiants</a>
				</form>
			</div>
		</div>
		<br>
	<!--<hr />-->
		<div class="row">
			<div class="col-md-12">
				<h1 align="center">Ighug te met en relation avec des personnes de ton campus avec qui tu as surement déja échangé un regard</h1>
				<h2 align="center">Grace à Ighug retrouve cette personne ou découvres en d'autre, pour un verre, un soir ou plus longtemps.</h2>
				<h3 align="center">Inscris toi</h3>
			</div>
		</div>
<br>
			<div class="row">
				<div class="col-md-5">
					<form method="post" action="view/Inscription.php">
						<div class="form-group"> 
							<input name="nom" type="nom" class="form-control" placeholder="Votre Nom" maxlength="20">
						</div>
						<div class="form-group">
							<input name="prenom" type="prenom" class="form-control" placeholder="Votre Prénom" maxlength="20">
						</div>
						<div class="form-group">		
							<input name="age" type="age" class="form-control" placeholder="Votre Age" maxlength="2">
						</div>
						<select name="sexe" class=form-control >
							<option disabled selected>Votre Sexe</option>
							<option>Femme</option>
							<option>Homme</option>
						</select>
						<br>
						<select name="ecole" class=form-control>
							<option disabled selected>Votre école</option>
							<option>IPI</option>
							<option>ICD</option>
							<option>ISCPA</option>
							<option>IGS-RH</option>
							<option>IGS-Formation continue</option>
							<option>IGS-Alternance</option>
							<option>ESAM</option>
						</select>
						<br>
						<div class="form-group">
							<input name="email" type="mail" class="form-control" placeholder="Votre Email" maxlength="40">
						</div>		
						<div class="form-group"> 
							<input name="login" type="password" class="form-control" placeholder="Votre mot de passe" 
							maxlength="20">
						</div>
						<div class="Submit2">
								<input type="submit" class="but2" value="S'inscrire">
						</div>
					</form>
				</div>
				<div class="col-md-7">
					<form>
						<img alt="Image d'accueil" src="img/image_accueil1.jpg" class="img-fluid" alt="Responsive image" id="img_accueil">
					</form>
				</div>	
			</div>
<br>
<br>
				<div class="row" id="quote">
					<form class="form-inline">
						<div class="col-md-4">
							<blockquote class="blockquote">
								<p>
									"Grace à Ighug, j'ai pu allié ma passion du dév et de la drague"
								</p>
								<cite>- André Rémuzon, IPI</cite>
							</blockquote>
						</div>
						<div class="col-md-4">
							<blockquote class="blockquote">
								<p>
									"N'ayant pas eu de relation longue depuis un moment, j'ai trouvé l'homme que je cherchais facilement"
								</p>
								<cite>- Romain Krumescouilles, IPI</cite>
							</blockquote>
						</div>
						<div class="col-md-4">
							<blockquote class="blockquote">
								<p>
									"Comme de nombreuses personnes j'étais un peu réticent, mais le site m'a vite démontré toute son utilité sur le campus"
								</p>
								<cite>- Alexis Chatain, IPI</cite>
							</blockquote>
						</div>
					</form>
				</div>
				<hr>
				<div class="col-md-12" id=langue>					                         
					<ul>
						 <li><a href="#">Francais</a></li>
						 <li><a href="#">Espagnol</a></li>
						 <li><a href="#">Portugais</a></li>
						 <li><a href="#">Anglais</a></li>
						 <li><a href="#">Italien</a></li>
						 <li><a href="#">Chinois</a></li>
					</ul>
					<p>
						IGHug © 2018
					</p>
				</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

  </body>
</html>