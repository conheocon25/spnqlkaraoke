<?php
	namespace MVC\Command;
	class SellingDomainTableSessionDetailUpdLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			//$Session = \MVC\Base\SessionRegistry::instance();
									
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
			$Session = $SD->getSession();
			$Table = $mTable->find($IdTable);
			$Title = mb_strtoupper($SD->getCourse()->getName(), 'UTF8');			
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("BÁN HÀNG", "/selling"),
				array("SỔ", $Table->getURLLog()),
				array($Session->getDateTimePrint(), $Session->getURLDetail())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("SD", $SD);
			$request->setObject("Table", $Table);
			$request->setObject("Navigation", $Navigation);			
			$request->setProperty('Title', $Title);
			$request->setProperty('IdSession', $Session->getId());
		}
	}
?>