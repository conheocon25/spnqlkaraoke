<?php
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/CollectCustomer.html");
	echo $Viewer->html();
?>
