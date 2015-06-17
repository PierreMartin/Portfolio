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

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  mysql_query ("SET NAMES 'utf-8'");
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
</head>

<body>
<div id="page">
<nav><?php include 'nav.inc.php'; ?>
</nav>
<header><h1>Promenade</h1></header>
<article>
  <form method="post" name="form1" action="<?php echo $editFormAction; ?>">
    <table align="center">
      <tr valign="baseline">
        <td nowrap align="right">Nom:</td>
        <td><input type="text" name="nom" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Prenom:</td>
        <td><input type="text" name="prenom" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Email:</td>
        <td><input type="text" name="email" value="" size="32"></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">Sexe:</td>
        <td valign="baseline"><table>
          <tr>
            <td><input type="radio" name="sexe" value="h" >
              Homme</td>
          </tr>
          <tr>
            <td><input type="radio" name="sexe" value="f" >
              Femme</td>
          </tr>
        </table></td>
      </tr>
      <tr valign="baseline">
        <td nowrap align="right">&nbsp;</td>
        <td><input type="submit" value="Insérer un enregistrement"></td>
      </tr>
    </table>
    <input type="hidden" name="date_insccription" value="<?php echo date('Y-m-d'); ?>">
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p>&nbsp;</p>
</article>
<footer><?php include 'footer.inc.php'; ?></footer>
</div>
</body>
</html>
