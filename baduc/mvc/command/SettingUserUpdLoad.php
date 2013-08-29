<?php
	namespace MVC\Command;	
	class SettingUserUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdUser = $request->getProperty("IdUser");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mUser = new \MVC\Mapper\User();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$UserSelected = $mUser->find($IdUser);
			$Title = mb_strtoupper("THIẾT LẬP / ".$UserSelected->getName()." / CẬP NHẬT", 'UTF8');
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------	
			$request->setObject("UserSelected", $UserSelected);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#user');
		}
	}
?>