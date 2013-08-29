<?php
	namespace MVC\Command;	
	class SettingSupplierUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdSupplier = $request->getProperty('IdSupplier');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier = new \MVC\Mapper\Supplier();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Supplier = $mSupplier->find($IdSupplier);
			$Suppliers = $mSupplier->findAll();			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Supplier->getName()." / CẬP NHẬT", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Supplier', $Supplier);
			$request->setObject('Suppliers', $Suppliers);
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', "/setting#supplier");
		}
	}
?>
