<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Global Sun - Reserver</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<style type="text/css">
#header {
	background-image: url(img/reservation.jpg);
}
#article {
	width: 800px;
	margin-right: auto;
	margin-left: auto;
}
#article div {
	border: thin dashed #999;
	background-color: #E1FFFF;
	text-align: center;
}
span#form {
	text-align: right;
	color: #999;
	font-size: small;
	font-weight: bold;
	font-style: italic;
}
#formulaire {
	margin-top: 5px;
	margin-right: 10px;
	margin-bottom: 10px;
}
.Classe_formText {
	color: #999;
	font-weight: bolder;
	line-height: 20px;
}
</style>
</head>

<body>
<div id="page">

	<?php include 'nav.inc.php'; ?>

    <div id="header">
      	<h1>reservations</h1>
  	</div>
    
<div id="article">
    	<div><span class="Classe_formText">VOS COORDONNEES :</span>
    	  <span id="form"><form id="form1" method="post" action="">
   	        <label for="formulaire"> Nom :</label>
    	      <input name="formulaire" type="text" id="formulaire" size="30" maxlength="40" />
  	    </form>
        
         <form id="form1" method="post" action="">
   	       <label for="formulaire"> Prénom :</label>
    	      <input name="formulaire" type="text" id="formulaire" size="30" maxlength="40" />
  	    </form>
        
         <form id="form1" method="post" action="">
   	       <label for="formulaire"> Adresse :</label>
    	      <input name="formulaire" type="text" id="formulaire" size="30" maxlength="40" />
  	    </form>
        
        <form id="form1" method="post" action="">
   	      <label for="formulaire"> Tèl. :</label>
    	      <input name="formulaire" type="text" id="formulaire" size="30" maxlength="40" />
  	    </form>
        
         <form id="form1" method="post" action="">
   	       <label for="formulaire"> Mail :</label>
    	      <input name="formulaire" type="text" id="formulaire" size="30" maxlength="40" />
  	    </form></span>
   	</div>
    	<div>
    	  <span class="Classe_formText">VOTRE SEJOUR :</span><br />
    	  <select name="menu choisir">
    	    <option>Promenade</option>
    	    <option>Vélo</option>
    	    <option>Parc d'attraction</option>
    	    <option>Week-end hôtel</option>
          </select><br />
    	</div>
        <div>
    	  <span class="Classe_formText">VOS DATES :</span><br />
    	  <select name="menu choisir">
    	    <option>Septembre</option>
    	    <option>Octobre</option>
    	    <option>Novembre</option>
    	    <option>Décembre</option>
          </select><br />
    </div>
</div>

    <?php include 'footer.inc.php'; ?>
    
</div>
</body>
</html>
