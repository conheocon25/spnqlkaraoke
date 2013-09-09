<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}
interface CategoryCollection extends \Iterator {function add( Object $category );	}
interface PageCollection extends \Iterator {function add( Object $Page);}
interface GuestCollection extends \Iterator {function add( Object $Guest);}
?>
