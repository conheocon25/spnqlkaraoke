<?php		
	namespace MVC\Command;	
	class ReportSellingDetail extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			$Type = $request->getProperty('Type');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSession = new \MVC\Mapper\Session();
			$mTracking = new \MVC\Mapper\Tracking();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "NHẬT KÍ BÁN HÀNG";
			$arrTime = array(
				"today"		=> 	@\MVC\Library\Date::rangeToday(),
				"yesterday"	=>	@\MVC\Library\Date::rangeYesterday(),
				"thisweek"	=>	@\MVC\Library\Date::rangeThisWeek(), 
				"lastweek"	=>	@\MVC\Library\Date::rangeBeforeWeek(),
				"thismonth"	=>	@\MVC\Library\Date::rangeThisMonth(),
				"lastmonth"	=>	@\MVC\Library\Date::rangeBeforeMonth()
			);
			$Tracking = $mTracking->find($Type);
			
			$DateStart = $arrTime[$Type][0];
			$DateEnd = $arrTime[$Type][1];
						
			if (isset($Tracking)){
				$DateStart = $Tracking->getDateStart();
				$DateEnd = $Tracking->getDateEnd();
			}
			
			if ( \strtotime($Type)== true){
				$DateStart = $Type;
				$DateEnd = $Type;
			}
						
			$Date = $DateStart;
			$Total = 0;
			$DataAll = array();						
			while (strtotime($Date) <= strtotime($DateEnd)){
				
				$Date1 = \date("Y-m-d", strtotime($Date))." 8:0:0";
				$Date2 = \date("Y-m-d", strtotime("+1 day", strtotime($Date)))." 7:59:59";
				$SessionAll = $mSession->findByTracking( array($Date1, $Date2 ) );
				
				$Value = 0;
				$Value1 = 0;
				$Value2 = 0;
				$SubData = array();
				$Index = 1;
				while ($SessionAll->valid()){
					$Session = $SessionAll->current();					
					$Value1 += ($Session->getStatus()==2?$Session->getValue():0);
					$Value2 += ($Session->getStatus()==1?$Session->getValue():0);
					$R = array(
						$Index++,
						$Session->getTimeRangePrint(),
						$Session->getUser()->getName(),
						$Session->getTable()->getName(),
						$Session->getNote(),
						$Session->getStatus()==2?$Session->getValuePrint():0,
						$Session->getStatus()==1?$Session->getValuePrint():0
					);
					$SubData[] = $R;
					
					$SessionAll->next();
				}				
				$Sum1 = new \MVC\Library\Number($Value1);
				$Sum2 = new \MVC\Library\Number($Value2);
				$Sum3 = new \MVC\Library\Number($Value1 + $Value2);
				
				$DateCurrent = new \DateTime($Date);
				$DataAll[] = array(
						$DateCurrent->format('d/m/Y'), 
						$SubData, 
						$Sum1->formatCurrency()." đ",
						$Sum2->formatCurrency()." đ",
						$Sum3->formatCurrency()." đ"
				);
								
				$Total += $Value1 + $Value2;
				$Date = \date("Y-m-d", strtotime("+1 day", strtotime($Date)));
			}
			$NTotal = new \MVC\Library\Number($Total);
			$DateCurrent = "Vĩnh Long, ngày ".\date("d")." tháng ".\date("m")." năm ".\date("Y");
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setProperty('Title', $Title);
			$request->setProperty('DateCurrent', $DateCurrent);
			$request->setObject('NTotal', $NTotal);
			$request->setObject('DataAll', $DataAll);
		}
	}
?>