<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
    <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans|Nova+Mono|Roboto+Condensed" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Parisienne&display=swap" rel="stylesheet">
    <link href="main.css" rel="stylesheet" />
</head>
<body>
	<h1>Créez votre compte</h1>
	<div class="content">
	<section>
		<div class="register-wrapper">
		<div class="register-block">
		<h3 class="register-title">Create an account</h3>
			<p>Créez votre compte en remplissant les champs ci-dessous.</p>
			<form action="process.php" method="post">
				<input type="text" name="email" Placeholder = "Email">
				<input type="text" name="password" Placeholder = "Password">
				<input type="text" name="alias" Placeholder = "Alias">
				<input type="submit" name="insert" value="Créer mon compte">
			</form>
		</div>
		</div>
	</section>
</div>
	<footer>
		<a href="https://github.com/adatechschool/projet-collectif-reseau-social-php-projet-collectif-emilio-boris-manon" target="_blank">Made with ❤ by Manon, Émilio & Boris</a>
	</footer>
</body>
</html>

