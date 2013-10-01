<?php
	namespace MVC\Command;	
	class SettingTermPaidUpdExe extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdTerm = $request->getProperty('IdTerm');
			$Name = $request->getProperty('Name2');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTerm = new \MVC\Mapper\TermPaid();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Name)) return self::statuses('CMD_OK');
				
			$Term = $mTerm->find($IdTerm);
			$Term->setName($Name);			
			$mTerm->update($Term);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Update', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>