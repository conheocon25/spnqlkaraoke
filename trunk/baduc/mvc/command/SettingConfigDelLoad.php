<?php
	namespace MVC\Command;	
	class SettingConfigDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdConfig = $request->getProperty('IdConfig');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig = new \MVC\Mapper\Config();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Config = $mConfig->find($IdConfig);			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Config->getParam()." / XÓA", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Config', $Config);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#config');
		}
	}
?>
