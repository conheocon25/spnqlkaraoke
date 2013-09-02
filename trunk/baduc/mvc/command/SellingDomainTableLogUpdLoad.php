<?php
	namespace MVC\Command;
	class SellingDomainTableLogUpdLoad extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$IdSession = $request->getProperty("IdSession");
			$IdTable = $request->getProperty("IdTable");
			$IdDomain = $request->getProperty("IdDomain");
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mSession = new \MVC\Mapper\Session();
			$mDomain = new \MVC\Mapper\Domain();
			$mTable = new \MVC\Mapper\Table();			
			$mCustomer = new \MVC\Mapper\Customer();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Session = $mSession->find($IdSession);
			$Domain = $mDomain->find($IdDomain);
			$Table = $mTable->find($IdTable);			
			$Customers = $mCustomer->findAll();
						
			//$Title = mb_strtoupper("BÁN HÀNG / ".$Domain->getName()." / ".$Table->getName()." / CẬP NHẬT", 'UTF8');
			$Title = $Session->getDateTimePrint();
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("BÁN HÀNG", "/selling"),
				array("SỔ", $Table->getURLLog())
			);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject("Session", $Session);			
			$request->setObject("Customers", $Customers);
			$request->setProperty('Title', $Title);
			$request->setObject("Navigation", $Navigation);
		}
	}
?>
