<?php
	namespace MVC\Command;	
	class SettingSupplierResourceUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSupplier = $request->getProperty("IdSupplier");
			$IdResource = $request->getProperty("IdResource");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();
			$mSupplier = new \MVC\Mapper\Supplier();
			$mUnit = new \MVC\Mapper\Unit();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Units = $mUnit->findAll();			
			$Resource = $mResource->find($IdResource);
			$Supplier = $mSupplier->find($IdSupplier);
						
			$Title = mb_strtoupper("THIẾT LẬP / ".$Supplier->getName()." / ".$Resource->getName()." / CẬP NHẬT", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("Units", $Units);
			$request->setObject("Resource", $Resource);			
			$request->setProperty("Title", $Title);
			$request->setProperty("URLHeader", $Supplier->getURLResource() );
		}
	}
?>