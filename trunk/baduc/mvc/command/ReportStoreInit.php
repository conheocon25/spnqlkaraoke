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
			$mResource 	= new \MVC\Mapper\Resource();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Tracking = $mTracking->find($IdTrack);			
			if (!isset($Tracking))
				return self::statuses('CMD_OK');
				
			$ResourceAll = $mResource->findAll();
			while($ResourceAll->valid()){
				$Resource = $ResourceAll->current();
				$TS = new \MVC\Domain\TrackingStore(
					null,					
					$Tracking->getId(),
					$Resource->getId(),
					0,
					0,
					0,
					$Resource->getPriceAverage()?$Resource->getPriceAverage():0
				);
				$mTS->insert($TS);
				$ResourceAll->next();
			}			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			
			return self::statuses('CMD_OK');
		}
	}
?>