<?php
	namespace MVC\Command;
	class SellingDomainTableSessionDetailDelExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
												
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSessionDetail = $request->getProperty("IdSessionDetail");
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSession = new \MVC\Mapper\Session();
			$mSD = new \MVC\Mapper\SessionDetail();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$SD = $mSD->find($IdSessionDetail);										
			$Session = $SD->getSession();
			$mSD->delete(array($IdSessionDetail));
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------												
			return self::statuses('CMD_OK');
		}
	}
?>
