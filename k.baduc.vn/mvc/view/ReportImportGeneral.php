<?php	
	require_once("mvc/base/Viewer.php");
	$Viewer = new Viewer("mvc/templates/ReportImportGeneral.html");
	echo $Viewer->pdf();
?>