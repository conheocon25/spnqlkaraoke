<?php		
	namespace MVC\Command;	
	class ReportPaidDetail extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$Date = $request->getProperty('Date');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mPaid = new \MVC\Mapper\PaidGeneral();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Title = "CÁC KHOẢN CHI";
			$PaidAll = $mPaid->findByTracking(array($Date, $Date));
			$Sum = 0;
			while ($PaidAll->valid()){
				$Paid = $PaidAll->current();
				$Sum += $Paid->getValue();
				$PaidAll->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
			
			$DateCurrent = "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setProperty('Sum', $NSum->formatCurrency()." đ" );
			$request->setObject('PaidAll', $PaidAll);
		}
	}
?>