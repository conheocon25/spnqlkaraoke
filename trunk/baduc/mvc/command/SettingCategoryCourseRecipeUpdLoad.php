<?php
	namespace MVC\Command;
	class SettingCategoryCourseRecipeUpdLoad extends Command{
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
			$IdRecipe = $request->getProperty("IdRecipe");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mResource = new \MVC\Mapper\Resource();
			$mCategory = new \MVC\Mapper\Category();
			$mCourse = new \MVC\Mapper\Course();
			$mR2C = new \MVC\Mapper\R2C();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$ResourceAll = $mResource->findAll();
			$Course = $mCourse->find($IdCourse);
			$Category = $mCategory->find($IdCategory);
			$Recipe = $mR2C->find($IdRecipe);
						
			$Title = "ÁNH XẠ";
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("THIẾT LẬP", "/setting"),
				array("DANH MỤC MÓN", "/setting/category"),
				array(mb_strtoupper($Category->getName(), 'UTF8'), $Category->getURLCourse()),
				array(mb_strtoupper($Course->getName(), 'UTF8'), $Course->getURLRecipe() )
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject("ResourceAll", $ResourceAll);
			$request->setObject("Course", $Course);
			$request->setObject("Recipe", $Recipe);
			
			$request->setProperty( "Title", $Title );
			$request->setObject("Navigation", $Navigation);
			
		}
	}
?>