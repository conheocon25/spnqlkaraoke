<?php
namespace MVC\Mapper;
require_once( "mvc/base/Mapper.php" );
class Tracking extends Mapper implements \MVC\Domain\TrackingFinder{

    function __construct() {
        parent::__construct();
				
		$tblTracking = "k3d_tracking";
		
		$selectAllStmt = sprintf("select * from %s ORDER BY date_start", $tblTracking);
		$selectStmt = sprintf("select *  from %s where id=?", $tblTracking);
		$updateStmt = sprintf("update %s set 
			date_start=?,
			date_end=?,
			paid_general=?,
			paid_pay_roll=?,
			paid_import=?,
			collect_general=?,
			collect_customer=?,
			collect_selling_debt=?, 
			collect_selling_nodebt=?, 
			estate_rate=?, 
			store_value=?
		where id=?", $tblTracking);
		$insertStmt = sprintf("insert into %s (
			date_start, 
			date_end, 
			paid_general,
			paid_pay_roll,
			paid_import,
			collect_general,
			collect_customer,
			collect_selling_debt, 
			collect_selling_nodebt, 
			estate_rate, 
			store_value
		) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", $tblTracking);
		$deleteStmt = sprintf("delete from %s where id=?", $tblTracking);
		$findByNearestStmt = sprintf("select * from %s where date_start<? ORDER BY date_start DESC LIMIT 1 ", $tblTracking);
		
        $this->selectAllStmt = self::$PDO->prepare($selectAllStmt);
        $this->selectStmt = self::$PDO->prepare($selectStmt);
        $this->updateStmt = self::$PDO->prepare($updateStmt);
        $this->insertStmt = self::$PDO->prepare($insertStmt);
		$this->deleteStmt = self::$PDO->prepare($deleteStmt);
		$this->findByNearestStmt = self::$PDO->prepare($findByNearestStmt);
    } 
    function getCollection( array $raw ) {
        return new TrackingCollection( $raw, $this );
    }

    protected function doCreateObject( array $array ) {
        $obj = new \MVC\Domain\Tracking( 
			$array['id'],
			$array['date_start'],
			$array['date_end'],
			$array['paid_general'],
			$array['paid_pay_roll'],
			$array['paid_import'],
			$array['collect_general'],
			$array['collect_customer'],
			$array['collect_selling_debt'],
			$array['collect_selling_nodebt'],
			$array['estate_rate'],
			$array['store_value']
		);
        return $obj;
    }

    protected function targetClass() {return "Tracking";}
    protected function doInsert( \MVC\Domain\Object $object ) {
        $values = array( 
			$object->getDateStart(), 
			$object->getDateEnd(),
			$object->getPaidGeneral(),
			$object->getPaidPayRoll(),
			$object->getPaidImport(),
			$object->getCollectGeneral(),
			$object->getCollectCustomer(),
			$object->getCollectSellingDebt(),
			$object->getCollectSellingNoDebt(),
			$object->getEstateRate(),
			$object->getStoreValue()
		);
        $this->insertStmt->execute( $values );
        $id = self::$PDO->lastInsertId();
        $object->setId( $id );
    }    
    protected function doUpdate( \MVC\Domain\Object $object ) {
        $values = array(
			$object->getDateStart(), 
			$object->getDateEnd(),
			$object->getPaidGeneral(),
			$object->getPaidPayRoll(),
			$object->getPaidImport(),
			$object->getCollectGeneral(),
			$object->getCollectCustomer(),
			$object->getCollectSellingDebt(),
			$object->getCollectSellingNoDebt(),
			$object->getEstateRate(),
			$object->getStoreValue(),
			$object->getId()
		);
        $this->updateStmt->execute( $values );
    }
	protected function doDelete(array $values) {return $this->deleteStmt->execute( $values );}
    function selectStmt() {return $this->selectStmt;}
    function selectAllStmt() {return $this->selectAllStmt;}
	
	function findByNearest($values) {
        $this->findByNearestStmt->execute( $values );
        return new TrackingCollection( $this->findByNearestStmt->fetchAll(), $this );
    }
	
}
?>