<?php
if (isset ( $_POST ['id'] )) {
	editStatus ();
}
function editStatus() {
	/* fonction unserialize(file_get_contents($file)); */
	$filename = "pokemons/" . $_POST ['id'] . ".txt";
	if (file_exists ( $filename )) {
		$array = unserialize ( file_get_contents ( $filename, FILE_USE_INCLUDE_PATH ) );
		if ($_POST ['code'] == $array ['code']) {
			$array ['discover'] = true;
			file_put_contents ( $filename, serialize ( $array ) );
		}
		
		if ($_POST ['id'] == '152') {
			echo '<div class="container"><div class="jumbotron">
			<h1>Pokedex</h1>
			<p>Erreur Pokemon inconnu</p>
		    </div></div>';
		}
	}
}
function masterList() {
	for($i = 0; $i < 153; $i ++) {
		$file = "pokemons/" . $i . ".txt";
		if (file_exists ( $file )) {
			$array = unserialize ( file_get_contents ( $file, FILE_USE_INCLUDE_PATH ) );
			echo '<tr><td>';
			echo $array ['id'] . ' : ' . $array ['code'];
			echo '</td><td><a href="pokemon.php?';
			echo $array ['id'];
			echo '&edit">';
			echo $array ['name'];
			echo '</a></td><td class="';
			echo $array ['ctype'];
			echo '">';
			echo $array ['type'];
			echo '</td></tr>';
		}
	}
}
function discoverList() {
	for($i = 0; $i < 152; $i ++) {
		$file = "pokemons/" . $i . ".txt";
		if (file_exists ( $file )) {
			$array = unserialize ( file_get_contents ( $file, FILE_USE_INCLUDE_PATH ) );
			if ($array ['discover'] == true) {
				echo '<tr><td>';
				echo $array ['id'];
				echo '</td><td><a href="pokemon.php?';
				echo $array ['id'];
				echo '">';
				echo $array ['name'];
				echo '</a></td><td class="';
				echo $array ['ctype'];
				echo '">';
				echo $array ['type'];
				echo '</td></tr>';
			}
		}
	}
}
function listTeam1() {
	for($i = 0; $i < 152; $i ++) {
		$file = "pokemons/" . $i . ".txt";
		if (file_exists ( $file )) {
			$array = unserialize ( file_get_contents ( $file, FILE_USE_INCLUDE_PATH ) );
			if ($array ['color'] == 'Fleurs') {
				echo '<tr><td>';
				echo $array ['id'];
				echo '</td><td><a href="pokemon.php?';
				echo $array ['id'];
				echo '">';
				echo $array ['name'];
				echo '</a></td><td class="';
				echo $array ['ctype'];
				echo '">';
				echo $array ['type'];
				echo '</td></tr>';
			}
		}
	}
}
function listTeam2() {
	for($i = 0; $i < 152; $i ++) {
		$file = "pokemons/" . $i . ".txt";
		if (file_exists ( $file )) {
			$array = unserialize ( file_get_contents ( $file, FILE_USE_INCLUDE_PATH ) );
			if ($array ['color'] == 'Bleuets') {
				echo '<tr><td>';
				echo $array ['id'];
				echo '</td><td><a href="pokemon.php?';
				echo $array ['id'];
				echo '">';
				echo $array ['name'];
				echo '</a></td><td class="';
				echo $array ['ctype'];
				echo '">';
				echo $array ['type'];
				echo '</td></tr>';
			}
		}
	}
}
function liste() {
	if (isset ( $_GET ['master'] )) {
		masterList ();
	} else if (isset ( $_GET ['team1'] )) {
		listTeam1 ();
	} else if (isset ( $_GET ['team2'] )) {
		listTeam2 ();
	} else {
		discoverList ();
	}
}
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
displayNav ( 'list.php' );
?>
		<h1>Liste des pokemons</h1>

		<table class="table table-hover">
			<tr>
				<th class="col-id">Numero</th>
				<th>Nom</th>
				<th>Type</th>
			</tr>
		<?php liste()?>
		</table>
	</div>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="/vendor/js/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="/vendor/js/bootstrap.min.js"></script>
</body>
</html>
