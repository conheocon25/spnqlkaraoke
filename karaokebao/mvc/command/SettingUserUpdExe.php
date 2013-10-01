<?php
	namespace MVC\Command;
	class SettingUserUpdExe extends Command {
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
			$Name = $request->getProperty('Name2');
			$Email = $request->getProperty('Email2');
			$Pass = $request->getProperty('Pass2');
			$Type = $request->getProperty('Type2');
			$Gender = $request->getProperty('Gender2');
			$Code = $request->getProperty('Code2');
			$Note = $request->getProperty('Note2');
						
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			$mUser = new \MVC\Mapper\User();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$User = $mUser->find($IdUser);
						
			$User->setName($Name);
			$User->setEmail($Email);
			$User->setPass($Pass);
			$User->setType($Type);
			$User->setGender($Gender);
			$User->setCode($Code);
			$User->setNote($Note);
			$mUser->update($User);
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Update', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>