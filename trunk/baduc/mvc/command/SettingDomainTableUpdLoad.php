<?php	
	namespace MVC\Command;
	class SettingDomainTableUpdLoad extends Command {
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
			$IdDomain = $request->getProperty("IdDomain");			
			
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
			$Title = mb_strtoupper("THIẾT LẬP / ".$Domain->getName()." / ".$Table->getName()." / CẬP NHẬT", 'UTF8');
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setProperty('Title', $Title);
			$request->setObject('Table', $Table);			
			$request->setProperty('URLHeader', $Domain->getURLTable());
		}
	}
?>