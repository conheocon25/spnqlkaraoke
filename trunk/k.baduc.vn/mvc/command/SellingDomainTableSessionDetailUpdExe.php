<?php
	namespace MVC\Command;
	class SellingDomainTableSessionDetailUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
												
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSessionDetail = $request->getProperty("IdSessionDetail");
			$Count = $request->getProperty("Count");
			$Price = $request->getProperty("Price");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSession = new \MVC\Mapper\Session();
			$mSD = new \MVC\Mapper\SessionDetail();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Count)||!isset($Price))
				return self::statuses('CMD_OK');
				
			$SD = $mSD->find($IdSessionDetail);
			$SD->setCount($Count);
			$SD->setPrice($Price);
			$mSD->update($SD);
			
			$Session = $SD->getSession();
			$Session->setValue( $Session->getReValue() );
			$mSession->update($Session);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			return self::statuses('CMD_OK');
		}
	}
?>
