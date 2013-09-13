<?php		
	namespace MVC\Command;	
	class SettingCategoryVideo extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Page = $request->getProperty('Page');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			require_once("mvc/base/mapper/MapperDefault.php");
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$Title = "VIDEO";
			$Navigation = array(
				array("ỨNG DỤNG", "/home"),
				array("THIẾT LẬP", "/setting")
			);
			if (!isset($Page)) $Page=1;
			$Config = $mConfig->findByName("ROW_PER_PAGE");
			$CategoryAll = $mCategoryVideo->findAll();
			$CategoryAll1 = $mCategoryVideo->findByPage(array($Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation($CategoryAll->count(), $Config->getValue(), "/setting/category/news" );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'CategoryVideo');
			$request->setProperty('Page', $Page);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('CategoryAll1', $CategoryAll1);
			$request->setObject('PN', $PN);			
			$request->setObject('CategoryAll', $CategoryAll);
						
			return self::statuses('CMD_DEFAULT');
		}
	}
?>