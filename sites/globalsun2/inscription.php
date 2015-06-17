<?php require_once('Connections/newsletter.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "inscription")) {
	mysql_query("SET NAMES 'utf8'");
  $insertSQL = sprintf("INSERT INTO newsletter (nom, prenom, email, sexe, date_insccription) VALUES (%s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['nom'], "text"),
                       GetSQLValueString($_POST['prenom'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['sexe'], "text"),
                       GetSQLValueString($_POST['date_insccription'], "date"));

  mysql_select_db($database_newsletter, $newsletter);
  $Result1 = mysql_query($insertSQL, $newsletter) or die(mysql_error());

  $insertGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE HTML>
<html lang="fr">
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
<link href="css/formulaire.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="page">
<nav><?php include 'nav.inc.php'; ?>
</nav>
<header>
  <h1>Inscription à la newsletter</h1></header>
<article>

<form action="<?php echo $editFormAction; ?>" method="POST" name="inscription">
	<label for="nom">Votre nom: <input name="nom" type="text" size="20" maxlength="40" required></label><br>

    <label for="prenom">Votre prénom:
    <input type="text" name="prenom" id="prenom" required></label><br>

    <label for="email">votre Email:
    <input type="text" name="email" id="email" required></label><br>

    
    <input name="date_insccription" type="hidden" id="date_insccription" value="<?php echo date("Y-m-d"); ?>">
    <p>
      <label>
        <input type="radio" name="sexe" value="h" id="sexe_0">
        Homme</label>
      <br>
      <label>
        <input type="radio" name="sexe" value="f" id="sexe_1">
        Femme</label>
      <br>
      <input type="submit" name="button" id="button" value="Envoyer">
  </p>
    <input type="hidden" name="MM_insert" value="inscription">
</form>
</article>
<footer><?php include 'footer.inc.php'; ?></footer>
</div>
</body>
</html>
