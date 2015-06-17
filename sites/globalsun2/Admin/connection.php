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

mysql_select_db($database_newsletter, $newsletter);
$query_liste_users = "SELECT * FROM utilisateurs";
$liste_users = mysql_query($query_liste_users, $newsletter) or die(mysql_error());
$row_liste_users = mysql_fetch_assoc($liste_users);
$totalRows_liste_users = mysql_num_rows($liste_users);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login'])) {
  $loginUsername=$_POST['login'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "../erreur.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_newsletter, $newsletter);
  
  $LoginRS__query=sprintf("SELECT login, password FROM utilisateurs WHERE login=%s AND password=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $newsletter) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
	if (PHP_VERSION >= 5.1) {session_regenerate_id(true);} else {session_regenerate_id();}
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
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
<p>Veulliez vous authentifier</p>
<form name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
  <label for="login">Votre identifiant: </label>
  <input type="text" name="login" id="login">
  (toto)<br>
  <label for="password">Votre mot de passe:</label>
  <input type="password" name="password" id="password">
  (titi)
  <br>
  <input type="submit" name="button" id="button" value="Envoyer">
</form>
<p><a href="../globalsun.sql">base SQL à installer</a></p>
</article>
<footer></footer>
</div>
</body>
</html>
<?php
mysql_free_result($liste_users);
?>
