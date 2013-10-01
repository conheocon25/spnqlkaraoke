<?php
	namespace MVC\Command;
	class SettingUserInsExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------			
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdUser = $request->getProperty('IdUser');
			$Name = $request->getProperty('Name1');
			$Email = $request->getProperty('Email1');
			$Pass = $request->getProperty('Pass1');
			$Type = $request->getProperty('Type1');
			$Gender = $request->getProperty('Gender1');
			$Code = $request->getProperty('Code1');
			$Note = $request->getProperty('Note1');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------												
			$mUser = new \MVC\Mapper\User();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------									
			$User = new \MVC\Domain\User(
				null,				
				$Name,
				$Email, 
				$Pass,
				1,//$Gender,
				$Note,
				null,	
				null,
				null,	
				1,//$Type,
				1 //$Code
			);
			$mUser->insert($User);
						
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Insert', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>
