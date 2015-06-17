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

$maxRows_liste_inscrits = 5;
$pageNum_liste_inscrits = 0;
if (isset($_GET['pageNum_liste_inscrits'])) {
  $pageNum_liste_inscrits = $_GET['pageNum_liste_inscrits'];
}
$startRow_liste_inscrits = $pageNum_liste_inscrits * $maxRows_liste_inscrits;

mysql_select_db($database_newsletter, $newsletter);
mysql_query("SET NAMES 'utf-8'"); //gère les caractères
$query_liste_inscrits = "SELECT * FROM newsletter ORDER BY id DESC"; // gère l'ordre par date et id
$query_limit_liste_inscrits = sprintf("%s LIMIT %d, %d", $query_liste_inscrits, $startRow_liste_inscrits, $maxRows_liste_inscrits);
$liste_inscrits = mysql_query($query_limit_liste_inscrits, $newsletter) or die(mysql_error());
$row_liste_inscrits = mysql_fetch_assoc($liste_inscrits);

if (isset($_GET['totalRows_liste_inscrits'])) {
  $totalRows_liste_inscrits = $_GET['totalRows_liste_inscrits'];
} else {
  $all_liste_inscrits = mysql_query($query_liste_inscrits);
  $totalRows_liste_inscrits = mysql_num_rows($all_liste_inscrits);
}
$totalPages_liste_inscrits = ceil($totalRows_liste_inscrits/$maxRows_liste_inscrits)-1;

$queryString_liste_inscrits = "";
if (!empty($_SERVER['QUERY_STRING'])) {
  $params = explode("&", $_SERVER['QUERY_STRING']);
  $newParams = array();
  foreach ($params as $param) {
    if (stristr($param, "pageNum_liste_inscrits") == false && 
        stristr($param, "totalRows_liste_inscrits") == false) {
      array_push($newParams, $param);
    }
  }
  if (count($newParams) != 0) {
    $queryString_liste_inscrits = "&" . htmlentities(implode("&", $newParams));
  }
}
$queryString_liste_inscrits = sprintf("&totalRows_liste_inscrits=%d%s", $totalRows_liste_inscrits, $queryString_liste_inscrits);
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
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<!--[if lte IE 7]>
<link rel="stylesheet" href="css/hack_ie.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>

<body>
<div id="page">
<nav><?php include 'navadmin.inc.php'; ?>
</nav>
<header><h1>Administration</h1></header>
<article>
<table width="90%" border="0" cellspacing="0" cellpadding="1">
  <caption>
   <h2> Liste des inscrits sur la newsletter</h2>
  </caption>
  <tr>
  <td class="lientd"></td>
  <td class="lientd"></td>
    <th scope="col">Numéro <br>d'inscription</th>
    <th scope="col">Nom</th>
    <th scope="col">Prénom</th>
    <th scope="col">Email</th>
    <th scope="col">Sexe</th>
    <th scope="col">Date<br>d'incription</th>
  </tr>
  <?php do { ?>
    <tr class="sensible">
    	<td ><a href="modifier2.php?id=<?php echo $row_liste_inscrits['id']; ?>">Modif</a></td>
         <td ><a href="supprimer.php?id=<?php echo $row_liste_inscrits['id']; ?>">Suppr</a></td>
      <td><?php echo $row_liste_inscrits['id']; ?></td>
      <td><?php echo $row_liste_inscrits['nom']; ?></td>
      <td><?php echo $row_liste_inscrits['prenom']; ?></td>
      <td><?php echo $row_liste_inscrits['email']; ?></td>
      <td><?php echo $row_liste_inscrits['sexe']; ?></td>
      <td><?php echo $row_liste_inscrits['date_insccription']; ?></td>
    </tr>
    
<?php } while ($row_liste_inscrits = mysql_fetch_assoc($liste_inscrits)); ?>
<tr>
		<td></td>
        <td></td>
        <td></td>
        <td><?php if ($pageNum_liste_inscrits > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_liste_inscrits=%d%s", $currentPage, 0, $queryString_liste_inscrits); ?>"><img src="../img/ffg.png" width="16" height="15" alt="Début"></a>
        <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_liste_inscrits > 0) { // Show if not first page ?>
            <a href="<?php printf("%s?pageNum_liste_inscrits=%d%s", $currentPage, max(0, $pageNum_liste_inscrits - 1), $queryString_liste_inscrits); ?>"><img src="../img/fg.png" width="8" height="15" alt="précedent"></a>
        <?php } // Show if not first page ?></td>
        <td><?php if ($pageNum_liste_inscrits < $totalPages_liste_inscrits) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_liste_inscrits=%d%s", $currentPage, min($totalPages_liste_inscrits, $pageNum_liste_inscrits + 1), $queryString_liste_inscrits); ?>"><img src="../img/fd.png" width="8" height="15" alt="suivants"></a>
        <?php } // Show if not last page ?></td>
        <td><?php if ($pageNum_liste_inscrits < $totalPages_liste_inscrits) { // Show if not last page ?>
            <a href="<?php printf("%s?pageNum_liste_inscrits=%d%s", $currentPage, $totalPages_liste_inscrits, $queryString_liste_inscrits); ?>"><img src="../img/ffd.png" width="16" height="15" alt="dernier"></a>
    <?php } // Show if not last page ?></td>
            <td></td>
      </tr>
</table>
</article>
<footer></footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script type="text/javascript" src="../js/main.js"></script>

</body>
</html>
<?php
mysql_free_result($liste_inscrits);
?>
