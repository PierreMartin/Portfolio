<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../erreur.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($_SERVER['QUERY_STRING']) && strlen($_SERVER['QUERY_STRING']) > 0) 
  $MM_referrer .= "?" . $_SERVER['QUERY_STRING'];
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>
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

$currentPage = $_SERVER["PHP_SELF"];

$maxRows_liste_a_modifier = 4;
$pageNum_liste_a_modifier = 0;
if (isset($_GET['pageNum_liste_a_modifier'])) {
  $pageNum_liste_a_modifier = $_GET['pageNum_liste_a_modifier'];
}
$startRow_liste_a_modifier = $pageNum_liste_a_modifier * $maxRows_liste_a_modifier;

mysql_select_db($database_newsletter, $newsletter);
mysql_query("SET NAMES 'utf-8'");
$query_liste_a_modifier = "SELECT id, nom, prenom, email, date_insccription FROM newsletter ORDER BY nom ASC";
$query_limit_liste_a_modifier = sprintf("%s LIMIT %d, %d", $query_liste_a_modifier, $startRow_liste_a_modifier, $maxRows_liste_a_modifier);
$liste_a_modifier = mysql_query($query_limit_liste_a_modifier, $newsletter) or die(mysql_error());
$row_liste_a_modifier = mysql_fetch_assoc($liste_a_modifier);

if (isset($_GET['totalRows_liste_a_modifier'])) {
  $totalRows_liste_a_modifier = $_GET['totalRows_liste_a_modifier'];
} else {
  $all_liste_a_modifier = mysql_query($query_liste_a_modifier);
  $totalRows_liste_a_modifier = mysql_num_rows($all_liste_a_modifier);
}
$totalPages_liste_a_modifier = ceil($totalRows_liste_a_modifier/$maxRows_liste_a_modifier)-1;

$queryString_liste_a_modifier = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_liste_a_modifier") == false && 
        stristr($param, "totalRows_liste_a_modifier") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_liste_a_modifier = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_liste_a_modifier = sprintf("&totalRows_liste_a_modifier=%d%s", $totalRows_liste_a_modifier, $queryString_liste_a_modifier);
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
<h2>Quelle inscription souhaitez vous modifier?</h2>
	<table width="80%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th scope="col">Nom</th>
    <th scope="col">Prénom</th>
    <th scope="col">Email</th>
    <th scope="col">date<br>d'inscription</th>
  </tr>
  <?php do { ?>
    <tr>
      <td><a href="modifier2.php?id=<?php echo $row_liste_a_modifier['id']; ?>"><?php echo $row_liste_a_modifier['nom']; ?></a></td>
      <td><?php echo $row_liste_a_modifier['prenom']; ?></td>
      <td><?php echo $row_liste_a_modifier['email']; ?></td>
      <td><?php echo $row_liste_a_modifier['date_insccription']; ?></td>
    </tr>
    <?php } while ($row_liste_a_modifier = mysql_fetch_assoc($liste_a_modifier)); ?>
    <tr>
        <td><?php if ($pageNum_liste_a_modifier > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_liste_a_modifier=%d%s", $currentPage, 0, $queryString_liste_a_modifier); ?>">Premier</a>
            <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_liste_a_modifier > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_liste_a_modifier=%d%s", $currentPage, max(0, $pageNum_liste_a_modifier - 1), $queryString_liste_a_modifier); ?>">Pr&eacute;c&eacute;dent</a>
            <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_liste_a_modifier < $totalPages_liste_a_modifier) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_liste_a_modifier=%d%s", $currentPage, min($totalPages_liste_a_modifier, $pageNum_liste_a_modifier + 1), $queryString_liste_a_modifier); ?>">Suivant</a>
            <?php } // Show if not last page ?></td>
        <td><?php if ($pageNum_liste_a_modifier < $totalPages_liste_a_modifier) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_liste_a_modifier=%d%s", $currentPage, $totalPages_liste_a_modifier, $queryString_liste_a_modifier); ?>">Dernier</a>
            <?php } // Show if not last page ?></td>
      </tr>
    </table>
</article>
<footer></footer>
</div>
</body>
</html>
<?php
mysql_free_result($liste_a_modifier);
?>
