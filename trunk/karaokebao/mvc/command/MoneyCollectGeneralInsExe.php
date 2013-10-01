<?php
	namespace MVC\Command;
	class MoneyCollectGeneralInsExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTerm = $request->getProperty('IdTerm');
			$Date = $request->getProperty('Date1');
			$Value = $request->getProperty('Value1');
			$Note = $request->getProperty('Note1');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCollect = new \MVC\Mapper\CollectGeneral();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$Collect = new \MVC\Domain\CollectGeneral(
				null,
				$IdTerm,
				$Date,
				$Value,
				$Note
			);
			$mCollect->insert($Collect);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Insert', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>
