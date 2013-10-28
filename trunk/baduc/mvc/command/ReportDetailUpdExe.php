<?php
	namespace MVC\Command;	
	class ReportDetailUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty('IdTrack');
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
			$Tracking = $mTracking->find($IdTrack);
			$Tracking->setDateStart($DateStart);
			$Tracking->setDateEnd($DateEnd);
			$Tracking->setPaidGeneral($PaidGeneral);
			$Tracking->setPaidPayRoll($PaidPayRoll);
			$Tracking->setPaidImport($PaidImport);			
			$Tracking->setCollectGeneral($CollectGeneral);
			$Tracking->setCollectCustomer($CollectCustomer);
			$Tracking->setCollectSellingDebt($CollectSellingDebt);
			$Tracking->setCollectSellingNoDebt($CollectSellingNoDebt);
			$Tracking->setEstateRate($EstateRate);
			$Tracking->setStoreValue($StoreValue);			
			$mTracking->update($Tracking);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>