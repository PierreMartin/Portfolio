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
<a class="bt" href="<?php echo $chemin ?>reservation.php">Reservez maintenant</a>