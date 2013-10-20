<?php		
	namespace MVC\Command;	
	class ReportStore extends Command{
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
			$mTracking 	= new \MVC\Mapper\Tracking();
			$mR2C  		= new \MVC\Mapper\R2C();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);
			$R2CAll 	= $mR2C->findAll();
			$Data 		= array();
			$Sum 		= 0;
			while ($R2CAll->valid()){
				$R2C = $R2CAll->current();
				$OldCount  		= $Tracking->getResourceOld( $R2C->getIdResource() );
				$ImportCount  	= $Tracking->getResourceImport( $R2C->getIdResource() );
				$ExportCount  	= $Tracking->getCountCourse( $R2C->getIdCourse() )*$R2C->getRate();
				$PriceAverage  	= $R2C->getResource()->getPriceAverage();
				$NewCount  		= $OldCount + $ImportCount - $ExportCount;
				$NewValue  		= $NewCount*$PriceAverage;
				
				$NNewValue		= new \MVC\Library\Number($NewValue);
				$NPriceAverage	= new \MVC\Library\Number($PriceAverage);
				
				$Data[] = array(	$R2C->getIdResource(), 
									$R2C->getResource()->getName(), 
									$R2C->getResource()->getSupplier()->getName(), 
									$OldCount, 
									$ImportCount, 
									$ExportCount, 
									$NPriceAverage->formatCurrency(),
									$NewCount,
									$NNewValue->formatCurrency()
				);
				$Sum += $NewValue;
				$R2CAll->next();
			}
			$NSum = new \MVC\Library\Number($Sum);
			
			$Title = "TỒN KHO";
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("BÁO CÁO", "/report"),
				array($Tracking->getName(), $Tracking->getURLView() )
			);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title'		, $Title);
			$request->setProperty('Sum'			, $NSum->formatCurrency() );
			$request->setObject('Tracking'		, $Tracking);
			$request->setObject('Data'			, $Data);
			$request->setObject('Navigation'	, $Navigation);
		}
	}
?>