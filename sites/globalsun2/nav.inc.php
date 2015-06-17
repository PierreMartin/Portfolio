<?php
 	if (strstr($_SERVER["REQUEST_URI"],'Hotel')){
		$chemin ="../";
	}
	else if (strstr($_SERVER["REQUEST_URI"],'Admin')){
		$chemin ="../";
	} else {
		$chemin="";	
	}
 ?>
<a id="logo" href="<?php echo $chemin ?>index.php">Accueil</a>
	<ul>
    	<li><a href="<?php echo $chemin ?>index.php">Promenade</a></li>
        <li><a href="<?php echo $chemin ?>velo.php">Vélo</a></li>
        <li><a href="<?php echo $chemin ?>parc.php">Parc d'attraction</a></li>
        <li><a href="<?php echo $chemin ?>Hotel/hotel.php">Week-end Hôtel</a></li>
	</ul>