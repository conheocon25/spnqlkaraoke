<?php
	namespace MVC\Command;	
	class SettingTermDelLoad extends Command {
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mTerm = new \MVC\Mapper\TermPaid();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Term = $mTerm->find($IdTerm);			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Term->getName()." / XÓA", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Term', $Term);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#term');
		}
	}
?>
