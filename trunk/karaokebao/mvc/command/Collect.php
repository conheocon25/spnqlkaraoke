<?php
	namespace MVC\Command;	
	class Collect extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Title = "KHOẢN THU";
			$Navigation = array(
				array("ỨNG DỤNG", "/app")				
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------																		
			$request->setProperty('Title', $Title );
			$request->setProperty('ActiveAdmin', 'TermCollect' );
			$request->setObject("Navigation", $Navigation);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>