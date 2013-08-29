<?php
	namespace MVC\Command;	
	class SettingEmployeeDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdEmployee = $request->getProperty('IdEmployee');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mEmployee = new \MVC\Mapper\Employee();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Employee = $mEmployee->find($IdEmployee);			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Employee->getName()." / XÓA", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Employee', $Employee);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#employee');
		}
	}
?>
