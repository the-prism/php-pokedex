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
<div class="container-fluid">
	<div class="container">
<?php
require 'nav.php';
displayNav('discover.php');
?>
			<div class="page-header">
				<h1>Ajouter au pokedex</h1>
			</div>

			<form action="list.php" method="post">
				<div class="form-group">
					<label for="id">Id</label> <input type="text" class="form-control"
						id="id" name="id" placeholder="Numero">
				</div>
				
				<div class="form-group">
					<h3>Code</h3>
				</div>
				
				<div class="form-group">
					<label for="code">Code de découverte</label> <input type="text"
						class="form-control" id="code" name="code" placeholder="Code">
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