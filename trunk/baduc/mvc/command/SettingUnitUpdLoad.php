<?php
	namespace MVC\Command;	
	class SettingUnitUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdUnit = $request->getProperty('IdUnit');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mUnit = new \MVC\Mapper\Unit();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Unit = $mUnit->find($IdUnit);			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Unit->getName()." / CẬP NHẬT", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Unit', $Unit);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#unit');
		}
	}
?>
