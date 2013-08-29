<?php	
	namespace MVC\Command;
	class SettingSupplierResourceInsLoad extends Command{
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mUnit = new \MVC\Mapper\Unit();
			$mSupplier = new \MVC\Mapper\Supplier();
			$mResource = new \MVC\Mapper\Resource();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------	
			$Units = $mUnit->findAll();
			$Supplier = $mSupplier->find($IdSupplier);			
			$Title = "THIẾT LẬP / NHÀ CUNG CẤP / ".mb_strtoupper($Supplier->getName(),'UTF8')." / THÊM NGUYÊN LIỆU";
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("Units", $Units);
			$request->setObject("Supplier", $Supplier);			
			$request->setProperty("Title", $Title);
			$request->setProperty("URLHeader", $Supplier->getURLResource() );
		}
	}
?>