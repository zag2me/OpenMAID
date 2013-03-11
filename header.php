<?php

include_once('config.php');


 global $sys_url;

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>

<head>

	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="pragma" content="no-cache">
	<meta name="cache-content" content="no-cache">
	<meta name="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-content" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="Expires" content="0">


	<title>MeediOS | Bringing Media to Life</title>

	<link href="style.css" rel="stylesheet" type="text/css" />

</head>

<body>

<table border="0" cellspacing="0" cellpadding="0" align="center" id="wrapper">

	<tr>

		<td colspan="2" id="header"><a href="http://www.meedios.com/"><img src="header.jpg" border="0" width="800" height="130" alt="MeediOS : Bringing media to life"></a></td>



	</tr>

<?php
	if (IsAdmin($currentUser) && $semaphore == true) echo "<tr><td id='menu' colspan='2'><center><b>OpenMAID is in Maintenance Mode - Please Don't Upload Plugins</b></center></td></tr>";
?>

	<tr>

		<td id="menu">