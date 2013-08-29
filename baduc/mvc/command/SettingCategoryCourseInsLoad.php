<?php	
	namespace MVC\Command;
	class SettingCategoryCourseInsLoad extends Command{
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
			$mCourse = new \MVC\Mapper\Course();
			$mUnit = new \MVC\Mapper\Unit();
									
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------	
			$Units = $mUnit->findAll();
			$Category = $mCategory->find($IdCategory);
			$Title = mb_strtoupper("THIẾT LẬP / ".$Category->getName()." / THÊM MÓN",'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty("Title", $Title);
			$request->setProperty("URLHeader", $Category->getURLCourse() );
			$request->setObject("Units", $Units);
			$request->setObject("Category", $Category);			
						
		}
	}
?>