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
				<img id="logo" alt="Logo" src="img\Logo_IGHug.png">
				<p id="desc">Le site de rencontre du campus IGS</p>
			</div>
			<div class="col-md-6">
				<form class="form-inline" id="login">
					<div>
						<input type="email" class="form-control" placeholder="Identifiant">
					</div>
					<div>
						<input type="password" class="form-control" placeholder="Mot de passe">
					</div>
					<div class="Submit">
						<a href="HUB.html">
							<button type="Submit" class="btn btn-danger">Se connecter</button>
						</a>
					</div>
				</form>
			</div>
		</div>
	<hr />
		<div class="row">
			<div class="col-md-12">
				<h1 align="center">Ighug te met en relation avec des personnes de ton campus avec qui tu as surement déja échangé un regard</h1>
				<h2 align="center">Grace à Ighug retrouve cette personne ou découvres en d'autre, pour un verre, un soir ou plus longtemps.</h1>
				<h3 align="center">Inscris toi</h2>
			</div>
		</div>
<br>
			<div class="row">
				<div class="col-md-6">
					<form role="form" >
						<div class="form-group"> 
							<input type="nom" class="form-control" placeholder="Votre Nom">
						</div>
						<div class="form-group">
							<input type="prenom" class="form-control" placeholder="Votre Prénom">
						</div>
						<div class="form-group">		
							<input type="age" class="form-control" placeholder="Votre Age">
						</div>
						<select class=form-control>
							<option>Votre Sexe</option>
							<option>Femme</option>
							<option>Homme</option>
						</select>
						<br>
						<select class=form-control>
							<option>Votre école</option>
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
							<input type="email" class="form-control" placeholder="Votre Email">
						</div>		
						<div class="Submit">
							<a href="HUB.html">
								<button type="Submit" class="btn btn-danger">S'inscrire</button>
							</a>
						</div>
					</form>
				</div>
				<div class="col-md-6">
					<form>
						<img alt="Image d'accueil" src="img/image_accueil.jpg" class="img-fluid" alt="Responsive image">
					</form>
				</div>	
			</div>
<br>
<br>
				<div class="row">
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
									"Les beurettes d'IGS n'ont plus eu de secrets pour moi, grace à cet outil"
								</p>
								<cite>- Romain Krumescouilles, IPI</cite>
							</blockquote>
						</div>
						<div class="col-md-4">
							<blockquote class="blockquote">
								<p>
									"Passionné depuis toujours par les buckets de poulet, ce site m'a sauvé la vie en me remettant sur le droit chemin des petites"
								</p>
								<cite>- Alexis Chatain, IPI</cite>
							</blockquote>
						</div>
					</form>
				</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

  </body>
</html>