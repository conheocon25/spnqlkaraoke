<?php
	namespace MVC\Command;
	class MoneyCollectGeneralUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdCollect = $request->getProperty('IdCollect');
			$Date = $request->getProperty('Date2');
			$Value = $request->getProperty('Value2');
			$Note = $request->getProperty('Note2');
														
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mCollect = new \MVC\Mapper\CollectGeneral();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$Collect = $mCollect->find($IdCollect);
			$Collect->setDate($Date);
			$Collect->setValue($Value);
			$Collect->setNote($Note);
			$mCollect->update($Collect);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Update', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>
