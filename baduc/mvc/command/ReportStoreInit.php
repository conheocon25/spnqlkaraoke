<?php		
	namespace MVC\Command;	
	class ReportStoreInit extends Command{
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
			$mR2C 		= new \MVC\Mapper\R2C();
			$mResource 	= new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);
			if ($Tracking->getTrackingStore()->count()>0)
				return self::statuses('CMD_OK');
				
			$R2CAll = $mR2C->findAll();
			while($R2CAll->valid()){
				$R2C = $R2CAll->current();
				$TS = new \MVC\Domain\TrackingStore(
					null,					
					$Tracking->getId(),
					$R2C->getIdResource(),
					0,
					0,
					0,
					$R2C->getResource()->getPriceAverage()
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