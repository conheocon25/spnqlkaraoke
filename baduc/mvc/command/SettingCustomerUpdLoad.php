<?php
	namespace MVC\Command;	
	class SettingCustomerUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdCustomer = $request->getProperty('IdCustomer');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCustomer = new \MVC\Mapper\Customer();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Customer = $mCustomer->find($IdCustomer);
			$Customers = $mCustomer->findAll();			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Customer->getName()." / CẬP NHẬT", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Customer', $Customer);
			$request->setObject('Customers', $Customers);
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', "/setting#customer");
		}
	}
?>
