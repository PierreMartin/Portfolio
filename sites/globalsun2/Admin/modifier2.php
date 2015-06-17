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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
mysql_query("SET NAMES 'utf-8'");
if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE newsletter SET nom=%s, prenom=%s, email=%s, sexe=%s, date_insccription=%s WHERE id=%s",
                       GetSQLValueString($_POST['nom'], "text"),
                       GetSQLValueString($_POST['prenom'], "text"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['sexe'], "text"),
                       GetSQLValueString($_POST['date_insccription'], "date"),
                       GetSQLValueString($_POST['id'], "int"));

  mysql_select_db($database_newsletter, $newsletter);
  $Result1 = mysql_query($updateSQL, $newsletter) or die(mysql_error());

  $updateGoTo = "modifier1.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_personne_a_modifier = "-1";
if (isset($_GET['id'])) {
  $colname_personne_a_modifier = $_GET['id'];
}
mysql_select_db($database_newsletter, $newsletter);
mysql_query("SET NAMES 'utf-8'");
$query_personne_a_modifier = sprintf("SELECT * FROM newsletter WHERE id = %s", GetSQLValueString($colname_personne_a_modifier, "int"));
$personne_a_modifier = mysql_query($query_personne_a_modifier, $newsletter) or die(mysql_error());
$row_personne_a_modifier = mysql_fetch_assoc($personne_a_modifier);
$totalRows_personne_a_modifier = mysql_num_rows($personne_a_modifier);
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
  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
    <table align="center">
      <tr valign="baseline">
        <td nowrap align="right">Id:</td>
        <td><?php echo $row_personne_a_modifier['id']; ?></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Nom:</td>
        <td><input type="text" name="nom" value="<?php echo htmlentities($row_personne_a_modifier['nom'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Prenom:</td>
        <td><input type="text" name="prenom" value="<?php echo htmlentities($row_personne_a_modifier['prenom'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Email:</td>
        <td><input type="text" name="email" value="<?php echo htmlentities($row_personne_a_modifier['email'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Sexe:</td>
        <td><input type="text" name="sexe" value="<?php echo htmlentities($row_personne_a_modifier['sexe'], ENT_COMPAT, 'utf-8'); ?>" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Date_insccription:</td>
        <td><input name="date_insccription" type="text" value="<?php echo htmlentities($row_personne_a_modifier['date_insccription'], ENT_COMPAT, 'utf-8'); ?>" size="32" readonly="readonly"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="Mettre à jour l'enregistrement"></td>
      </tr>
    </table>
    <input type="hidden" name="MM_update" value="form1">
    <input type="hidden" name="id" value="<?php echo $row_personne_a_modifier['id']; ?>">
  </form>
  <p>&nbsp;</p>
</article>
<footer></footer>
</div>
</body>
</html>
<?php
mysql_free_result($personne_a_modifier);
?>
