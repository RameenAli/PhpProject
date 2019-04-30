<?php
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['category']);
	unset($_SESSION['name']);
	session_unset();
	session_destroy();
	//header("location: index.php");
	echo "unset session";
	//exit;
	header("location: login.php");
?>

<?php
/*
 session_start();
 if (!isset($_SESSION['user'])) {
  header("Location: index.php");
 } else if(isset($_SESSION['user'])!="") {
  header("Location: hey.php");
 }
 
 if (isset($_GET['logout'])) {
  unset($_SESSION['user']);
  session_unset();
  session_destroy();
  header("Location: index.php");
  exit;
 }
 */
 ?>