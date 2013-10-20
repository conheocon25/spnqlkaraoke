<?php		
	namespace MVC\Command;	
	class ReportStoreEvaluate extends Command{
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
			$mTS 		= new \MVC\Mapper\TrackingStore();
			$mR2C  		= new \MVC\Mapper\R2C();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking 	= $mTracking->find($IdTrack);
			if ($Tracking->getTrackingStore()->count()>0)
				return self::statuses('CMD_OK');
			
			$R2CAll 	= $mR2C->findAll();
			$Data 		= array();
			$Sum 		= 0;
			while ($R2CAll->valid()){
				$R2C = $R2CAll->current();
				$OldCount  		= $Tracking->getResourceOld( $R2C->getIdResource() );
				$ImportCount  	= $Tracking->getResourceImport( $R2C->getIdResource() );
				$ExportCount  	= $Tracking->getCountCourse( $R2C->getIdCourse() )*$R2C->getRate();
				$PriceAverage  	= $R2C->getResource()->getPriceAverage();
				
				$TS = new \MVC\Domain\TrackingStore(
					null,					
					$Tracking->getId(),
					$R2C->getIdResource(),
					$OldCount,
					$ImportCount,
					$ExportCount,
					$PriceAverage
				);
				$mTS->insert($TS);				
				$R2CAll->next();
			}
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			return self::statuses('CMD_OK');
		}
	}
?>