<?php		
	namespace MVC\Command;	
	class Selling extends Command {
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
									
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			require_once("mvc/base/mapper/MapperDefault.php");
			$mSD 		= new \MVC\Mapper\SessionDetail();
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$DomainAll = $mDomain->findAll();
			$CategoryAll 	= $mCategory->findAll();	
			$Top10			= $mSD->findByTop10(array());
			$Domain			= $DomainAll->current();	
			$Config			= $mConfig->findByName("CATEGORY_AUTO");
			$UnitAll		= $mUnit->findAll();
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$Title = "BÁN HÀNG";
			$Navigation = array();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Title', $Title);
			$request->setProperty('ActiveAdmin', 'Selling');
			$request->setObject('Navigation', $Navigation);			
			$request->setObject('DomainAll', $DomainAll);			
			$request->setObject('Domain', $Domain);			
			$request->setObject('CategoryAll', $CategoryAll);	
			$request->setObject('UnitAll'		, $UnitAll);			
			$request->setObject('Top10', $Top10);			
			$request->setObject('Config'		, $Config);			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>