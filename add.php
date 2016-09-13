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
	
<?php
function addPokemon() {
	/* fonction unserialize(file_get_contents($file)); */
	echo '<div class="alert alert-success" role="alert">Fichier du pokemon : <a href="';
	$filename = "pokemons/" . $_POST ['id'] . ".txt";
	echo $filename . '">' . $filename . '</a></div>';
	file_put_contents ( $filename, serialize ( $_POST ) );
}

function lookForPokemon() {
	for($i = 0; $i < 153; $i ++) {
		if (isset ( $_GET [$i] )) {
			$file = "pokemons/" . $i . ".txt";
			$array = unserialize ( file_get_contents ( $file, FILE_USE_INCLUDE_PATH ) );
			return $array;
			break;
		}
	}
}

$poke = lookForPokemon ();
if (isset ( $_POST ['id'] )) {
	addPokemon ();
	$poke = $_POST;
}
$pname = $poke ['name'];
$pid = $poke ['id'];

$ptype = $poke ['type'];
$pctype = $poke ['ctype'];

$att1 = $poke ['attack1'];
$acolor1 = $poke ['attack1c'];

$att2 = $poke ['attack2'];
$acolor2 = $poke ['attack2c'];

$plvl = $poke ['lvl'];
$lcolor = $poke ['lvlc'];

$team = $poke ['color'];

$w1 = $poke ['weak1'];
$w1c = $poke ['cweak1'];

$w2 = $poke ['weak2'];
$w2c = $poke ['cweak2'];

$unlock = $poke ["code"];

?>

<div class="container-fluid">
		<div class="container">
<?php
require 'nav.php';
displayNav ( 'add.php' );
?>
			<div class="page-header">
				<h1>Ajouter un pokemon</h1>
			</div>

			<form action="add.php" method="post">
				<div class="form-group">
					<label for="id">Id</label> <input type="text" class="form-control"
						id="id" name="id" placeholder="Numero" value="<?php echo $GLOBALS['pid']?>">
				</div>
				<div class="form-group">
					<label for="code">Unlock Code</label> <input type="text"
						class="form-control" id="code" name="code" placeholder="Code" value="<?php echo $GLOBALS['unlock']?>">
				</div>
				<div class="form-group">
					<label for="name">Nom du pokemon</label> <input type="text"
						class="form-control" id="name" name="name" placeholder="Nom" value="<?php echo $GLOBALS['pname']?>">
				</div>
				<div class="form-group">
					<label for="type">Type du pokemon</label> <input type="text"
						class="form-control" id="type" name="type" placeholder="Type" value="<?php echo $GLOBALS['ptype']?>">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="ctype" name="ctype" placeholder="Css Color" value="<?php echo $GLOBALS['pctype']?>">
				</div>

				<div class="form-group">
					<h3>Attaques</h3>
				</div>

				<div class="form-group">
					<label for="attack1">Primaire</label> <input type="text"
						class="form-control" id="attack1" name="attack1"
						placeholder="Attaque" value="<?php echo $GLOBALS['att1']?>">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="attack1c"
						name="attack1c" placeholder="Classe css" value="<?php echo $GLOBALS['acolor1']?>">
				</div>

				<div class="form-group">
					<label for="attack2">Secondaire</label> <input type="text"
						class="form-control" id="attack2" name="attack2"
						placeholder="Attaque" value="<?php echo $GLOBALS['att2']?>">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="attack2c"
						name="attack2c" placeholder="Classe css" value="<?php echo $GLOBALS['acolor2']?>">
				</div>
				
				<div class="form-group">
					<h3>Faiblaisses</h3>
				</div>

				<div class="form-group">
					<label for="weak1">Primaire</label> <input type="text"
						class="form-control" id="weak1" name="weak1"
						placeholder="Attaque" value="<?php echo $GLOBALS['w1']?>">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="cweak1"
						name="cweak1" placeholder="Classe css" value="<?php echo $GLOBALS['w1c']?>">
				</div>

				<div class="form-group">
					<label for="weak2">Secondaire</label> <input type="text"
						class="form-control" id="weak2" name="weak2"
						placeholder="Attaque" value="<?php echo $GLOBALS['w2']?>">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="cweak2"
						name="cweak2" placeholder="Classe css" value="<?php echo $GLOBALS['w2c']?>">
				</div>

				<div class="form-group">
					<h3>Niveau</h3>
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="lvl" name="lvl"
						placeholder="Lvl" value="<?php echo $GLOBALS['plvl']?>">
				</div>

				<div class="form-group">
					<input type="text" class="form-control" id="lvlc" name="lvlc"
						placeholder="Css class color" value="<?php echo $GLOBALS['lcolor']?>">
				</div>

				<div class="form-group">
					<label for="color">Équipe</label> <input type="text"
						class="form-control" id="color" name="color" placeholder="Team" value="<?php echo $GLOBALS['team']?>">
				</div>

				<div class="checkbox">
					<label> <input type="checkbox" name="discover" value="true"> Is
						discovered
					</label>
				</div>

				<button type="submit" class="btn btn-default">Ajouter</button>
			</form>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/vendor/js/jquery-2.1.4.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/vendor/js/bootstrap.min.js"></script>
</body>
</html>