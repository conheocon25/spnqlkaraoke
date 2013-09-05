<?php		
	namespace MVC\Command;	
	class PaidPayRoll extends Command{
		function doExecute( \MVC\Controller\Request $request ){
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------			
			$IdEmployee = $request->getProperty('IdEmployee');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------						
			$mConfig = new \MVC\Mapper\Config();
			$mEmployee = new \MVC\Mapper\Employee();
			$mPaidPayRoll = new \MVC\Mapper\PaidPayRoll();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$EmployeeAll = $mEmployee->findAll();
			
			if (!isset($IdEmployee)){
				$Employee = $EmployeeAll->current();
				$IdEmployee = $Employee->getId();
			}else{
				$Employee = $mEmployee->find($IdEmployee);
			}
						
			$Title = mb_strtoupper($Employee->getName(), 'UTF8');
			$Navigation = array(
				array("ỨNG DỤNG", "/app"),
				array("KHOẢN CHI", "/paid"),
				array("LƯƠNG", "/paid/payroll")
			);
			
			$Config = $mConfig->findByName('ROW_PER_PAGE');
			if (!isset($Page)) $Page = 1;
			$PaidAll = $mPaidPayRoll->findByPage(array($IdEmployee, $Page, $Config->getValue() ));
			$PN = new \MVC\Domain\PageNavigation( $Employee->getPayRollAll()->count(), $Config->getValue(), $Employee->getURLPPR() );
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------									
			$request->setObject('EmployeeAll', $EmployeeAll);
			$request->setObject('Employee', $Employee);
			$request->setProperty('Title', $Title);
			$request->setObject('Navigation', $Navigation);
			$request->setObject('PN', $PN);
		}
	}
?>