<?php
	namespace MVC\Command;
	class MoneyPaidGeneralUpdExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------
			$Session = \MVC\Base\SessionRegistry::instance();
			
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------
			$IdPaid = $request->getProperty('IdPaid');
			$Date = $request->getProperty('Date2');
			$Value = $request->getProperty('Value2');
			$Note = $request->getProperty('Note2');
														
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
			$mPaid = new \MVC\Mapper\PaidGeneral();
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------
			if (!isset($Date))
				return self::statuses('CMD_OK');
				
			$Paid = $mPaid->find($IdPaid);
			$Paid->setDate($Date);
			$Paid->setValue($Value);
			$Paid->setNote($Note);
			$mPaid->update($Paid);
					
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			$request->setProperty('Update', 'true');
			return self::statuses('CMD_OK');
		}
	}
?>
