<?php require_once('../Connections/newsletter.php'); ?>
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

$colname_personne_a_supprimer = "-1";
if (isset($_GET['id'])) {
  $colname_personne_a_supprimer = $_GET['id'];
}
mysql_select_db($database_newsletter, $newsletter);
$query_personne_a_supprimer = sprintf("SELECT id, nom, prenom, date_insccription FROM newsletter WHERE id = %s", GetSQLValueString($colname_personne_a_supprimer, "int"));
$personne_a_supprimer = mysql_query($query_personne_a_supprimer, $newsletter) or die(mysql_error());
$row_personne_a_supprimer = mysql_fetch_assoc($personne_a_supprimer);
$totalRows_personne_a_supprimer = mysql_num_rows($personne_a_supprimer);
?>
<!DOCTYPE HTML>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Promenade, Global Sun</title>
<link href="../css/base.css" rel="stylesheet" type="text/css" />
<style type="text/css">
	@import url("../css/media-query.css");
</style>

<!--[if lte IE 7]>
<link rel="stylesheet" href="css/hack_ie.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="../css/admin.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<div id="page">
<nav><?php include 'navadmin.inc.php'; ?>
</nav>
<header><h1>Administration</h1></header>
<article>
<p>Etes-vous sûr de supprimer <?php echo $row_personne_a_supprimer['nom']; ?>  <?php echo $row_personne_a_supprimer['prenom']; ?>, inscrit le <?php echo $row_personne_a_supprimer['date_insccription']; ?> ?</p>
<p><a href="supprimer2.php?id=<?php echo $row_personne_a_supprimer['id']; ?>">Oui</a></p>
<p><a href="supprimer1.php">Non</a></p>
</article>
<footer></footer>
</div>
</body>
</html>
<?php
mysql_free_result($personne_a_supprimer);
?>
