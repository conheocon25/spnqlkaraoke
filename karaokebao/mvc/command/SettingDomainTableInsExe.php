<?php
	namespace MVC\Command;
	class SettingDomainTableInsExe extends Command {
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
			$Name = $request->getProperty('Name1');
			$Type= $request->getProperty('Type1');
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------
			
			$mTable = new \MVC\Mapper\Table();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------			
			$Table = new \MVC\Domain\Table(
				null,
				$IdDomain,
				$Name,
				1,
				$Type
			);
			$mTable->Insert($Table);
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Insert', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>