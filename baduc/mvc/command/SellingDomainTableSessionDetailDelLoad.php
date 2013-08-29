<?php
	namespace MVC\Command;
	class SellingDomainTableSessionDetailDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdTable = $request->getProperty("IdTable");
			$IdSessionDetail = $request->getProperty("IdSessionDetail");
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mTable = new \MVC\Mapper\Table();
			$mSD = new \MVC\Mapper\SessionDetail();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Table = $mTable->find($IdTable);
			$SD = $mSD->find($IdSessionDetail);
			$Title = mb_strtoupper("BÁN HÀNG .../ ".$Table->getName()." / ".$SD->getCourse()->getName()." / XÓA", 'UTF8');
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("SD", $SD);			
			$request->setProperty('Title', $Title);			
			$request->setProperty('URLHeader', $Table->getURLDetail() );			
		}
	}
?>