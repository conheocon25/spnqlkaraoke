<?php
namespace MVC\Mapper;
require_once( "mvc/base/domain/Collections.php");
require_once( "mvc/base/mapper/Collection.php");

class AppCollection extends Collection implements \MVC\Domain\AppCollection {function targetClass( ) {return "\MVC\Domain\App";}}
class UserCollection extends Collection implements \MVC\Domain\UserCollection {function targetClass( ) {return "\MVC\Domain\User";}}
class CategoryCollection extends Collection implements \MVC\Domain\CategoryCollection {function targetClass( ) {return "\MVC\Domain\Category";}}

class PageCollection extends Collection implements \MVC\Domain\PageCollection{function targetClass(){return "\MVC\Domain\Page";}}
class GuestCollection extends Collection implements \MVC\Domain\GuestCollection{function targetClass(){return "\MVC\Domain\Guest";}}

?>