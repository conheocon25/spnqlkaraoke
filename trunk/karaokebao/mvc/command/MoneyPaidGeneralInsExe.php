<?php
	namespace MVC\Command;
	class MoneyPaidGeneralInsExe extends Command{
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
			$mPaid = new \MVC\Mapper\PaidGeneral();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$Paid = new \MVC\Domain\PaidGeneral(
				null,
				$IdTerm,
				$Date,
				$Value,
				$Note
			);
			$mPaid->insert($Paid);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Insert', 'true');
			return self::statuses('CMD_OK');			
		}
	}
?>
