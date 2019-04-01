<?
session_start();
include 'includes/module/test.php';
if ($_GET['admin'] == "settings") {
	include 'includes/pages/settings.php';
}
?>
