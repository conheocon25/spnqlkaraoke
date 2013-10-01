<?php
	namespace MVC\Command;	
	class SettingConfigInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$Param = $request->getProperty('Param1');
			$Value = $request->getProperty('Value1');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig = new \MVC\Mapper\Config();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Param)||$Param=="")
				return self::statuses('CMD_OK');
				
			$Config = new \MVC\Domain\Config(
				null,
				$Param,
				$Value
			);			
			$mConfig->insert($Config);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Insert', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>