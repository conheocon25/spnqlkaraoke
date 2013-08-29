<?php		
	namespace MVC\Command;	
	class ReportDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty("IdTrack");
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking = new \MVC\Mapper\Tracking();
			$mTermPaid = new \MVC\Mapper\TermPaid();
			$mTermCollect = new \MVC\Mapper\TermCollect();
			$mCustomer = new \MVC\Mapper\Customer();
			$mSupplier = new \MVC\Mapper\Supplier();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);
			$TrackingAll = $mTracking->findAll();
			$TermPaidAll = $mTermPaid->findAll();
			$TermCollectAll = $mTermCollect->findAll();
			$SupplierAll = $mSupplier->findAll();
			$CustomerAll = $mCustomer->findAll();
			
			$DateCurrent = 'THÁNG '.\date("m/Y", strtotime($Tracking->getDateStart()));
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setProperty('URLHeader', "/report");			
			$request->setObject('TrackingAll', $TrackingAll);
			$request->setObject('Tracking', $Tracking);
			$request->setObject('CustomerAll', $CustomerAll);
			$request->setObject('TermPaidAll', $TermPaidAll);
			$request->setObject('TermCollectAll', $TermCollectAll);
			$request->setObject('SupplierAll', $SupplierAll);
			
		}
	}
?>