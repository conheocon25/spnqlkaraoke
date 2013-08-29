<?php
	namespace MVC\Command;
	class SellingDomainTableLogDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$IdDomain = $request->getProperty("IdDomain");
			$IdTable = $request->getProperty("IdTable");
			$IdSession = $request->getProperty("IdSession");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSession = new \MVC\Mapper\Session();
			$mDomain = new \MVC\Mapper\Domain();
			$mTable = new \MVC\Mapper\Table();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Session = $mSession->find($IdSession);			
			$Domain = $mDomain->find($IdDomain);
			$Table = $mTable->find($IdTable);
									
			$Title = mb_strtoupper("BÁN HÀNG / ".$Domain->getName()." / ".$Table->getName()." / XÓA NHẬT KÍ", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("Session", $Session);						
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', $Table->getURLLog() );
		}
	}
?>
