<?php
	namespace MVC\Command;
	class SellingDomainTableMergeExe extends Command{
		function doExecute( \MVC\Controller\Request $request ) {
			require_once("mvc/base/domain/HelperFactory.php");			
			//-------------------------------------------------------------
			//THAM SỐ TOÀN CỤC
			//-------------------------------------------------------------						
			$Session = \MVC\Base\SessionRegistry::instance();
									
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐẾN
			//-------------------------------------------------------------						
			$IdTable = $request->getProperty("IdTable");
			$IdTableMerge = $request->getProperty("IdTable1");		
			
			//-------------------------------------------------------------
			//MAPPER DỮ LIỆU
			//-------------------------------------------------------------			
						
			$mTable = new \MVC\Mapper\Table();
			$mSession = new \MVC\Mapper\Session();
			$mSessionDetail = new \MVC\Mapper\SessionDetail();		
			
			//-------------------------------------------------------------
			//XỬ LÝ CHÍNH
			//-------------------------------------------------------------						
			$Table = $mTable->find($IdTable);
			$TableMerge = $mTable->find($IdTableMerge);
			$TableSession = $Table->getSessionActive();			
			$TableMergeSession = $TableMerge->getSessionActive();		
			
			$TableSD = $TableSession->getDetails();
			$TableMergeSD = $TableMergeSession->getDetails();
			
			$IdSeesionMerge  = $TableMergeSession->getId();			
			
			$IdCourse = null;
			$DomainSDCurrent = null;
			$check = 0;		
			while($TableSD->valid()){
				$IdCourse = null;
				$check = 0;
				$DomainSDCurrent = $TableSD->current();
				$IdCourse = $DomainSDCurrent->getIdCourse();
				$check = $mSessionDetail->check(array($IdSeesionMerge, $IdCourse));
				$DomainSDMerge = null;
				$NewCount = 0;
				$i = 0;
				if($check != null) {				
					$DomainSDMerge = $mSessionDetail->find($check);
					$NewCount = $DomainSDCurrent->getCount() + $DomainSDMerge->getCount();
					$DomainSDMerge->setCount($NewCount);
					$mSessionDetail->update($DomainSDMerge);
					
				}
				else {									
					$NewDomainSessionDetail = new \MVC\Domain\SessionDetail(
						null,
						$IdSeesionMerge,
						$IdCourse,
						$DomainSDCurrent->getCount(),
						$DomainSDCurrent->getPrice()
					);
					$mSessionDetail->insert($NewDomainSessionDetail);
				}							
				$TableSD->next();
			}
			$mSession->delete(array($TableSession->getId()));
			/*
			$NewDomainSession = new \MVC\Domain\Session(
				null,
				$IdTable, 
				1, 
				1, 
				null,
				null,					
				"",
				"Chưa",
				0,
				0,
				0
			);
			$mSession->insert($NewDomainSession);
			$Result = "OK";
				*/								
			//-------------------------------------------------------------
			//THAM SỐ GỬI ĐI
			//-------------------------------------------------------------
			return self::statuses('CMD_OK');
		}
	}
?>
