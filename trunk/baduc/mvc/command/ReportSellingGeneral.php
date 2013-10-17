<?php		
	namespace MVC\Command;	
	class ReportSellingGeneral extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
														
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTrack = $request->getProperty('IdTrack');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTracking = new \MVC\Mapper\Tracking();			
			$mSession = new \MVC\Mapper\Session();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Tracking = $mTracking->find($IdTrack);
			
			$ChartData = array();
			$Date = $Tracking->getDateStart();
			$EndDate = $Tracking->getDateEnd();
			$Sum1 = 0;
			$Sum2 = 0;
		
			while (strtotime($Date) <= strtotime($EndDate)){
				$Date1 = \date("Y-m-d", strtotime($Date))." 8:0:0";
				$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($Date)))." 7:59:59";
				$Sessions = $mSession->findByTracking( array($Date1, $Date2) );
				$Value1 = 0;
				$Value2 = 0;
				while($Sessions->valid()){
					$Session = $Sessions->current();					
					$Value1 += ($Session->getStatus()==2?$Session->getValue():0);
					$Value2 += ($Session->getStatus()==1?$Session->getValue():0);					
					$Sessions->next();
				}
				//Định dạng lại gọn
				$N1 = new \MVC\Library\Number($Value1);
				$N2 = new \MVC\Library\Number($Value2);
				$N3 = new \MVC\Library\Number($Value1 + $Value2);
				$ChartData[] = array(
					\date("d/m", strtotime($Date)), 
					$N1->formatCurrency()." đ",
					$N2->formatCurrency()." đ",
					$N3->formatCurrency()." đ"
				);
				$Date = \date("Y-m-d", strtotime("+1 day", strtotime($Date)));
				$Sum1 += $Value1;
				$Sum2 += $Value2;
			}
			$NSum1 = new \MVC\Library\Number($Sum1);
			$NSum2 = new \MVC\Library\Number($Sum2);
			$NSum3 = new \MVC\Library\Number($Sum1 + $Sum2);
			$Title = "DOANH THU THÁNG ".\date("m/Y", strtotime($EndDate));
			$DateCurrent = "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('ChartData', $ChartData);			
			$request->setProperty('Title', $Title);
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setProperty('Sum1', $NSum1->formatCurrency()." đ");
			$request->setProperty('Sum2', $NSum2->formatCurrency()." đ");
			$request->setProperty('Sum3', $NSum3->formatCurrency()." đ");
		}
	}
?>