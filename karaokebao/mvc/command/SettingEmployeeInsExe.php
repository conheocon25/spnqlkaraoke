<?php
	namespace MVC\Command;
	class SettingEmployeeInsExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$Name = $request->getProperty('Name1');
			$Gender = $request->getProperty('Gender1');
			$Job = $request->getProperty('Job1');
			$Phone = $request->getProperty('Phone1');
			$Address = $request->getProperty('Address1');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------												
			$mEmployee = new \MVC\Mapper\Employee();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if ( !isset($Name) )
				return self::statuses('CMD_OK');
				
			$Employee = new \MVC\Domain\Employee(
				null,
				$Name,
				$Gender,
				$Job,
				$Phone,
				$Address									
			);
			$mEmployee->insert($Employee);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Insert', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>
