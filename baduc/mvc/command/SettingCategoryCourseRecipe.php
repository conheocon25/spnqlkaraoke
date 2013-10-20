<?php
	namespace MVC\Command;
	class SettingCategoryCourseRecipe extends Command{
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
			$IdCourse = $request->getProperty("IdCourse");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCategory = new \MVC\Mapper\Category();
			$mCourse = new \MVC\Mapper\Course();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Course = $mCourse->find($IdCourse);
			$Category = $mCategory->find($IdCategory);
			$Title = mb_strtoupper($Course->getName(), 'UTF8');
			
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting"),
				array("DANH MỤC MÓN", "/setting/category"),
				array(mb_strtoupper($Category->getName()), $Category->getURLCourse())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("Course", $Course);
			
			$request->setProperty( "Title", $Title );
			$request->setObject("Navigation", $Navigation);			
		}
	}
?>