<?php
	namespace MVC\Command;	
	class SettingCategoryCourse extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCategory = $request->getProperty("IdCategory");
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mCategory = new \MVC\Mapper\Category();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Categories = $mCategory->findAll();			
			$Categories1 = $mCategory->findAll();									
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------						
			$request->setObject("Categories", $Categories);
			$request->setObject("Categories1", $Categories1);
			
			$request->setProperty("URLHeader", "/setting#category");
			
		}
	}
?>