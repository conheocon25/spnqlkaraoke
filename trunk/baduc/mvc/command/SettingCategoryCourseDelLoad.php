<?php	
	namespace MVC\Command;
	class SettingCategoryCourseDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCourse = $request->getProperty("IdCourse");
			$IdCategory = $request->getProperty("IdCategory");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mCategory = new \MVC\Mapper\Category();
			$mCourse = new \MVC\Mapper\Course();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------	
			$Category = $mCategory->find($IdCategory);
			$Course = $mCourse->find($IdCourse);			
			$Title = mb_strtoupper("THIẾT LẬP / ".$Category->getName()." / ".$Course->getName()." / XÓA",'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Course', $Course);
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#category');
		}
	}
?>