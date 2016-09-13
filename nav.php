<?php
function displayNav($filename){
	echo '<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span> 
	<span class="icon-bar"></span> 
	<span class="icon-bar"></span>
	</button>
	<a href="/index.php" class="navbar-brand">Pokedex</a>
	</div>
	<div class="collapse navbar-collapse" id="navbar-collapse">
	<ul class="nav navbar-nav">';
	
	if($filename === 'index.php'){
		echo linkStatus('Index', '#', true);
	} else {
		echo linkStatus('Index', '/index.php', false);
	}
	
	if($filename === 'pokemon.php'){
		echo linkStatus('Fiche', '#', true);
	} else {
		echo linkStatus('Fiche', '#', false);
	}
	
	if($filename === 'list.php'){
		echo linkStatus('Liste', '#', true);
	} else {
		echo linkStatus('Liste', '/list.php', false);
	}
	
	if($filename === 'discover.php'){
		echo linkStatus('Découvrir', '#', true);
	} else {
		echo linkStatus('Découvrir', '/discover.php', false);
	}
	echo '</ul>
	</div>
	</div>
	</nav>';
}

function linkStatus($name, $link, $active){
	$string = '<li';
	if ($active == true){
		$string .= ' class="active"><a href="';
		$string .= $link;
		$string .= '">';
		$string .= $name;
		$string .= ' <span class="sr-only">(current)</span></a></li>';
	} else {
		$string .= '><a href="';
		$string .= $link;
		$string .= '">';
		$string .= $name;
		$string .= '</a></li>';
	}
	return $string;
}