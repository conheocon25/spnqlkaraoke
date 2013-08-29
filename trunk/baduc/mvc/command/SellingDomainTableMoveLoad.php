<?php
	namespace MVC\Command;
	class SellingDomainTableMoveLoad extends Command{
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
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mDomain = new \MVC\Mapper\Domain();
			$mTable = new \MVC\Mapper\Table();
						
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Domain = $mDomain->find($IdDomain);
			$Table = $mTable->find($IdTable);
			$Domains = $mDomain->findAll();
			
			$Title = mb_strtoupper("DI CHUYỂN ".$Table->getName()." ĐẾN", 'UTF8');
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Table', $Table);
			$request->setObject('Domains', $Domains);						
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', $Table->getURLDetail() );
		}
	}
?>
