<?php
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
displayNav ( 'pokemon.php' );
?>
		<div class="row">
			<div class="col-sm-10">
				<h1>
				<?php
				echo $GLOBALS ['pname'];
				echo '&nbsp;&nbsp;&nbsp;';
				if (isset ( $_GET ['edit'] )) {
					echo '<a href="add.php?' . $GLOBALS ['pid'] . '" class="btn btn-default">Edit</a>';
				}
				?>
				</h1>
			</div>
			<div class="col-sm-2">
				<div class="well al-center <?php echo $GLOBALS['lcolor']?>">Niveau <?php echo $GLOBALS['plvl']?></div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3">
				<a href="#" class="thumbnail"> <img
					src='img/<?php echo $GLOBALS['pid']?>.png'>
				</a>
				<div class="well <?php echo $GLOBALS['team']?>">Équipe : <?php echo $GLOBALS['team']?></div>
			</div>
			<div class="col-sm-9">
				<div class="well <?php echo $GLOBALS['pctype']?>">Type : <?php echo $GLOBALS['ptype']?></div>
				<h4>Attaques</h4>
				<div class="well <?php echo $GLOBALS['acolor1']?>"><?php echo $GLOBALS['att1']?></div>
				<div class="well <?php echo $GLOBALS['acolor2']?>"><?php echo $GLOBALS['att2']?></div>
				<h4>Faiblesses</h4>
				<div class="well <?php echo $GLOBALS['w1c']?>"><?php echo $GLOBALS['w1']?></div>
				<div class="well <?php echo $GLOBALS['w2c']?>"><?php echo $GLOBALS['w2']?></div>

			</div>
		</div>
		<div class="row al-center">
			<div class="col-sm-12">
				<div class="well al-center">Id : <?php echo $GLOBALS['pid']?> Code : <?php echo $GLOBALS['unlock']?></div>
			</div>
		</div>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/vendor/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/vendor/js/bootstrap.min.js"></script>
</body>
</html>
