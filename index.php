<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Pokedex</title>

<!-- Bootstrap -->
<link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
<link href="color.css" rel="stylesheet">
</head>
<body>
	<div class="container">
<?php
require 'nav.php';
displayNav ( 'index.php' );
?>
		<div class="jumbotron">
			<h1>Pokedex</h1>
			<p>Liste de tous les pokemons qui existent dans le monde</p>
			<p>
				<a class="btn btn-primary btn-lg" href="list.php" role="button">Liste des pokemons</a>
			</p>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/vendor/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/vendor/js/bootstrap.min.js"></script>
	<script>
	    jQuery.htmlPrefilter = function( html ) {
	        return html;
            };
	</script>
</body>
</html>
