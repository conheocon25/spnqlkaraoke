<?php
	namespace MVC\Command;	
	class SettingSupplierResource extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSupplier = new \MVC\Mapper\Supplier();
							
			//-------------------------------------------------------------
			//XỬ LÍ CHÍNH
			//-------------------------------------------------------------			
			$Suppliers = $mSupplier->findAll();
			$Suppliers1 = $mSupplier->findAll();					
							
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("Suppliers1", $Suppliers1);
			$request->setObject("Suppliers", $Suppliers);
			$request->setProperty("URLHeader", "/setting#supplier");
						
		}
	}
?>