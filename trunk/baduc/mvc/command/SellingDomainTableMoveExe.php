<?php
	namespace MVC\Command;
	class SellingDomainTableMoveExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------			
			$IdTable1 = $request->getProperty("IdTable");
			$IdTable2 = $request->getProperty("IdTable1");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTable = new \MVC\Mapper\Table();
			$mSession = new \MVC\Mapper\Session();
						
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Table1 = $mTable->find( $IdTable1 );
			$Table2 = $mTable->find( $IdTable2 );
			
			//Chuyển Session2 sang qua Session1
			$Session1 = $Table1->getSessionActive();
			$Session2 = $Table2->getSessionActive();
			$Session1->setIdTable($IdTable2);			
			$mSession->update($Session1);
			
			/*	
			if( isset($Session2) ){
				$mSession->delete(array($Session2->getId()));
			}
			
			
			$NewSession = new \MVC\Domain\Session(
				null,
				$IdTable1, 
				1, 
				1, 
				null,
				null,					
				"",
				"Chưa",
				0,
				0,
				0
			);
			$mSession->insert($NewSession);
			*/									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
