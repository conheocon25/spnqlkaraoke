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
			
			$Title = $Session->getDateTimePrint();
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("BÁN HÀNG", "/selling"),
				array(mb_strtoupper($Domain->getName(), 'UTF8'), $Domain->getURLSelling()),
				array(mb_strtoupper($Table->getName(), 'UTF8'), $Domain->getURLSelling()),
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
