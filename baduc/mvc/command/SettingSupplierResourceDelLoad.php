<?php	
	namespace MVC\Command;
	class SettingSupplierResourceDelLoad extends Command {
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
			$mSupplier = new \MVC\Mapper\Supplier();
			$mResource = new \MVC\Mapper\Resource();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------	
			$Supplier = $mSupplier->find($IdSupplier);
			$Resource = $mResource->find($IdResource);
			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Supplier->getName()." / ".$Resource->getName()." / XÓA", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Resource', $Resource);			
			$request->setProperty('Title', $Title);
			$request->setProperty("URLHeader", $Supplier->getURLResource() );
		}
	}
?>