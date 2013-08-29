<?php
	namespace MVC\Command;
	class SellingDomainTableSessionDetailUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdSessionDetail = $request->getProperty("IdSessionDetail");
			$IdTable = $request->getProperty("IdTable");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mSD = new \MVC\Mapper\SessionDetail();
			$mTable = new \MVC\Mapper\Table();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$SD = $mSD->find($IdSessionDetail);
			$Table = $mTable->find($IdTable);
			$Title = mb_strtoupper("NHẬT KÍ .../ ".$Table->getName()." / ".$SD->getCourse()->getName()." / CẬP NHẬT", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("SD", $SD);
			$request->setObject("Table", $Table);
			$request->setProperty('URLHeader', $Table->getURLDetail() );
			$request->setProperty('Title', $Title);
		}
	}
?>