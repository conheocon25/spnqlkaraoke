<?php
	namespace MVC\Command;
	class ReportImportDetail extends Command {
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
			$mOrder = new \MVC\Mapper\OrderImport();
			$mTracking = new \MVC\Mapper\Tracking();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Title = "NHẬT KÍ NHẬP HÀNG";
											
			$DateStart = $Type;
			$DateEnd = $Type;
									
			$Date = $DateStart;
			$Total = 0;
			$DataAll = array();						
			while (strtotime($Date) <= strtotime($DateEnd)){
				
				$Date1 = \date("Y-m-d", strtotime($Date));
				$Date2 = \date("Y-m-d", strtotime($Date));
				$OrderAll = $mOrder->findByTracking( array($Date1, $Date2 ) );
				
				$Value = 0;
				$Value1 = 0;
				$Value2 = 0;
				$SubData = array();
				$Index = 1;
				while ($OrderAll->valid()){
					$Order = $OrderAll->current();					
					$Value += $Order->getValue();
					
					$R = array(
						$Index++,
						$Order->getDatePrint(),
						$Order->getSupplier()->getName(),
						$Order->getValuePrint()
					);
					$SubData[] = $R;
					
					$OrderAll->next();
				}				
				$Sum = new \MVC\Library\Number($Value);
								
				$DateCurrent = new \DateTime($Date);
				$DataAll[] = array(
						$DateCurrent->format('d/m/Y'),
						$SubData, 
						$Sum->formatCurrency()." đ",
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