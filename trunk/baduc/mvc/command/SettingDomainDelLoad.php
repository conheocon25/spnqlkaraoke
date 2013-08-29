<?php
	namespace MVC\Command;	
	class SettingDomainDelLoad extends Command {
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdDomain = $request->getProperty('IdDomain');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mDomain = new \MVC\Mapper\Domain();
					
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------							
			$Domain = $mDomain->find($IdDomain);						
			$Title = mb_strtoupper("THIẾT LẬP / ".$Domain->getName()." / XÓA", 'UTF8');
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$request->setObject('Domain', $Domain);			
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/setting#domain');
		}
	}
?>
