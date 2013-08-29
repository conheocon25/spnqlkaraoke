<?php		
	namespace MVC\Command;	
	class Setting extends Command {
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
			$mCategory = new \MVC\Mapper\Category();
			$mEmployee = new \MVC\Mapper\Employee();
			$mDomain = new \MVC\Mapper\Domain();
			$mSupplier = new \MVC\Mapper\Supplier();			
			$mUnit = new \MVC\Mapper\Unit();
			$mCustomer = new \MVC\Mapper\Customer();
			$mTermPaid = new \MVC\Mapper\TermPaid();
			$mTermCollect = new \MVC\Mapper\TermCollect();
			$mUser = new \MVC\Mapper\User();			
			$mConfig = new \MVC\Mapper\Config();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			$Title = "MODULE THIẾT LẬP";
			$CategoryAll = $mCategory->findAll();
			$SupplierAll = $mSupplier->findAll();
			$DomainAll = $mDomain->findAll();			
			$EmployeeAll = $mEmployee->findAll();
			$UnitAll = $mUnit->findAll();			
			$CustomerAll = $mCustomer->findAll();
			$TermPaidAll = $mTermPaid->findAll();
			$TermCollectAll = $mTermCollect->findAll();			
			$UserAll = $mUser->findAll();
			$ConfigAll = $mConfig->findAll();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setProperty('Title', $Title);
			$request->setProperty('URLHeader', '/app');
			
			$request->setObject('CategoryAll', $CategoryAll);
			$request->setObject('SupplierAll', $SupplierAll);
			$request->setObject('DomainAll', $DomainAll);			
			$request->setObject('EmployeeAll', $EmployeeAll);
			$request->setObject('UnitAll', $UnitAll);			
			$request->setObject('CustomerAll', $CustomerAll);
			$request->setObject('TermPaidAll', $TermPaidAll);
			$request->setObject('TermCollectAll', $TermCollectAll);
			$request->setObject('UserAll', $UserAll);
			$request->setObject('ConfigAll', $ConfigAll);
			
			return self::statuses('CMD_DEFAULT');
		}
	}
?>