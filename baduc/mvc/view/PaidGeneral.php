<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/PaidGeneral.html");
	echo $Viewer->html();
?>
