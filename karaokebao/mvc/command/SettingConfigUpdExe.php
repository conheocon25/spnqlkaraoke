<?php
	namespace MVC\Command;	
	class SettingConfigUpdExe extends Command {
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
			$Param = $request->getProperty('Param2');
			$Value = $request->getProperty('Value2');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mConfig = new \MVC\Mapper\Config();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Param))
				return self::statuses('CMD_OK');
				
			$Config = $mConfig->find($IdConfig);
			$Config->setParam($Param);
			$Config->setValue($Value);
			$mConfig->update($Config);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Update', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>
