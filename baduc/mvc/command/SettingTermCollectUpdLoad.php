<?php
	namespace MVC\Command;	
	class SettingTermCollectUpdLoad extends Command {
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
			$mTerm = new \MVC\Mapper\TermCollect();
								
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Term = $mTerm->find($IdTerm);			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Term->getName()." / CẬP NHẬT", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject('Term', $Term);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#collect');
		}
	}
?>
