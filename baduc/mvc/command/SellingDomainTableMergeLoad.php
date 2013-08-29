<?php
	namespace MVC\Command;
	class SellingDomainTableMergeLoad extends Command{
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
			$Table = $mTable->find($IdTable);
			$Domains = $mDomain->findAll();
			
			$Title = mb_strtoupper("GOM BÀN ".$Table->getName()." VỚI", 'UTF8');
	
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setObject('Table', $Table);
			$request->setObject('Domains', $Domains);
			$request->setProperty('URLHeader', $Table->getURLDetail() );
			
			$request->setProperty('Title', $Title);
		}
	}
?>
