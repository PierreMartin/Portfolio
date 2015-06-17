<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Promenade, Global Sun</title>
<link href="css/base.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	@import url("css/media-query.css");
</style>
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/hack_ie.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style type="text/css">
header {
	background-image: url(img/reservation.jpg);
}
</style>
</head>

<body>
<div id="page">
<nav><?php include 'nav.inc.php'; ?>
</nav>
<header>
  <h1>Réservation</h1>
</header>
<div id="article">
<div id="gauche">
<h2>Réservation</h2>
<p>Laissez nous vos coordonées et nous vous ferons parvenir par la poste notre catalogue dans les plus brefs délais</p>

</div>
<div id="droite">
  <form id="form1" method="post" action="">
    <p>
      <label for="nom">Votre nom:</label>
      <input type="text" name="nom" id="nom" required /><br />
      <label for="prenom">Votre prénom:</label>
      <input type="text" name="prenom" id="prenom" required /><br />
      <label for="adresse">votre adresse:</label>
      <input type="text" name="adresse" id="adresse" required /><br />
      <label for="cp">Code postal:</label>
      <input type="text" name="cp" id="cp" /><br />
      <label for="ville">Votre ville:</label>
      <input type="text" name="ville" id="ville" /><br />
      <input type="submit" name="envoyer" id="envoyer" value="Envoyer" />

    </p>
  </form>
</div>
</article>
<footer></footer>
</div>
</body>
</html>
