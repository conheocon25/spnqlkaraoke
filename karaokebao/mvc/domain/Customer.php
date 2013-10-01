<?php
namespace MVC\Domain;
require_once( "mvc/base/domain/DomainObject.php" );

class Customer extends Object{

    private $Id;
	private $Name;
	private $Phone;
    private $Type;
    private $Card;
    private $Note;
    private $Address;
	private $Discount;
		
	/*Hàm khởi tạo và thiết lập các thuộc tính*/
    function __construct( $Id=null, $Name=null, $Type=null, $Card=null, $Phone=null, $Address=null, $Note=null, $Discount=null ) {
        $this->Id = $Id;
		$this->Name = $Name;
		$this->Type = $Type;
		$this->Card = $Card;
		$this->Phone = $Phone;
		$this->Address = $Address;
		$this->Note = $Note;
		$this->Discount = $Discount;
        parent::__construct( $Id );
    }	
    function getId( ) {return $this->Id;}
		
	function getType(){return $this->type;}	
    function setType( $Type ) {$this->type = $Type;$this->markDirty();}
	function getTypePrint(){
		if ($this->type==1)
			return "VIP";
		return "thường";
	}
	
	function getCard(){
		return $this->card;
	}
	
    function setCard( $Card ) {
        $this->card = $Card;
        $this->markDirty();
    }
	
	function getNote(){
		return $this->note;
	}
	
    function setNote( $Note ) {
        $this->note = $Note;
        $this->markDirty();
    }
	
	function getName(){
		return $this->name;
	}
	
    function setName( $Name ) {
        $this->name = $Name;
        $this->markDirty();
    }

	function getPhone(){
		return $this->phone;
	}
	
    function setPhone( $Phone ) {
        $this->phone = $Phone;
        $this->markDirty();
    }
			
    function setAddress( $Address ) {
        $this->address = $Address;
        $this->markDirty();
    }
	function getAddress(){
		return $this->address;
	}
		
	function setDiscount( $Discount ) {
        $this->discount = $Discount;
        $this->markDirty();
    }
	function getDiscount(){
		return $this->discount;
	}
	
	function getSessionAll(){
		$mSession = new	\MVC\Mapper\Session();
		$Sessions = $mSession->findByCustomer(array($this->Id));
		return $Sessions;
	}
	
	function getCollectAll(){
		$mCC = new \MVC\Mapper\CollectCustomer();
		$CollectAll = $mCC->findBy(array($this->getId()));
		return $CollectAll;
	}
	
	function toJSON(){
		$json = array(
			'Id' 			=> $this->getId(),
			'Name'			=> $this->getName(),
		 	'Phone'			=> $this->getPhone(),
			'Type'			=> $this->getType(),
			'Card'			=> $this->getCard(),
			'Note'			=> $this->getNote(),
			'Address'		=> $this->getAddress(),
			'Discount'		=> $this->getDiscount()
		);
		return json_encode($json);
	}
	
	//=================================================================================
	function getURLCollect(){return "/collect/customer/".$this->getId();}
	function getURLCollectInsLoad(){return "/collect/customer/".$this->getId()."/ins/load";}
	function getURLCollectInsExe(){return "/collect/customer/".$this->getId()."/ins/exe";}
	
	function getURLUpdLoad(){return "/setting/customer/".$this->getId()."/upd/load";}
	function getURLUpdExe(){return "/setting/customer/".$this->getId()."/upd/exe";}
	
	function getURLDelLoad(){return "/setting/customer/".$this->getId()."/del/load";}
	function getURLDelExe(){return "/setting/customer/".$this->getId()."/del/exe";}
			
    static function findAll() {$finder = self::getFinder( __CLASS__ ); return $finder->findAll();}
    static function find( $Id ) {$finder = self::getFinder( __CLASS__ ); return $finder->find( $Id );}		
}

?>