<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Resource extends Object{

    private $id;
	private $idsupplier;
	private $name;
    private $price;
    private $unit;
	private $description;
	
	//-------------------------------------------------------------------------------
	//ACCESSING MEMBER PROPERTY
	//-------------------------------------------------------------------------------
    function __construct( $id=null, $idsupplier=null, $name=null, $unit=null, $price=null, $description=null) {
        $this->id = $id;
		$this->idsupplier = $idsupplier;
		$this->name = $name;
		$this->price = $price;
		$this->unit = $unit;
		$this->description = $description;
        parent::__construct( $id );
    }
	function setId( $Id) {return $this->id = $Id;}
    function getId( ) {return $this->id;}
			
	function getIdSupplier( ) {return $this->idsupplier;}
    function setIdSupplier( $supplier ) {$this->idsupplier = $supplier;$this->markDirty();}
	function getSupplier(){
		$mSupplier = new \MVC\Mapper\Supplier();
		$Supplier = $mSupplier->find($this->getIdSupplier());		
		return $Supplier;
	}
	
    function setName( $name ) {$this->name = $name;$this->markDirty();}
    function getName( ) {return $this->name;}
	
	function setPrice( $price ) {$this->price = $price;$this->markDirty();}
    function getPrice( ) {return $this->price;}
	function getPriceAverage(){
		$mOD = new \MVC\Mapper\OrderImportDetail();
		$Value = $mOD->evalPrice(array($this->getId()));
		return round($Value, 0);
	}
	
	function setUnit( $Unit ) {$this->unit = $Unit;$this->markDirty();}
    function getUnit( ) {return $this->unit;}
	
	function getPricePrint( ) {$num = new \MVC\Library\Number($this->price);return $num->formatCurrency()." đ";}
	function getDescription( ) {return $this->description;}
	function setDescription( $description ) {$this->description = $description;$this->markDirty();}
	
	//-------------------------------------------------------------------------------
	//DEFINE URL
	//-------------------------------------------------------------------------------		
	function getURLUpdLoad(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/setting/supplier/".$this->getIdSupplier()."/".$this->getId()."/del/exe";}
	
	//-------------------------------------------------------------------------------
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $id );}
	
}
?>