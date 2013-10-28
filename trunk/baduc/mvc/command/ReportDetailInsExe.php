<?php
	namespace MVC\Command;	
	class ReportDetailInsExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$DateStart 		= $request->getProperty('DateStart');
			$DateEnd 		= $request->getProperty('DateEnd');
			$PaidGeneral 	= $request->getProperty('PaidGeneral');
			$PaidPayRoll 	= $request->getProperty('PaidPayRoll');
			$PaidImport 	= $request->getProperty('PaidImport');			
			$CollectGeneral 	= $request->getProperty('CollectGeneral');
			$CollectCustomer 	= $request->getProperty('CollectCustomer');
			$CollectSellingDebt	= $request->getProperty('CollectSellingDebt');
			$CollectSellingNoDebt	= $request->getProperty('CollectSellingNoDebt');
			$EstateRate 		= $request->getProperty('EstateRate');
			$StoreValue 		= $request->getProperty('StoreValue');	
				
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking = new \MVC\Mapper\Tracking();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($DateStart)||$DateStart=="")
				return self::statuses('CMD_OK');
				
			$Tracking = new \MVC\Domain\Tracking(
				null,
				$DateStart,
				$DateEnd,
				$PaidGeneral,
				$PaidPayRoll,
				$PaidImport,
				$CollectGeneral,
				$CollectCustomer,
				$CollectSellingDebt,
				$CollectSellingNoDebt,
				$EstateRate,
				$StoreValue
			);			
			$mTracking->insert($Tracking);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			return self::statuses('CMD_OK');
		}
	}
?>
