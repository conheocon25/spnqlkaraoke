<?php
namespace MVC\Domain;

interface AppCollection extends \Iterator {function add( Object $App );}
interface UserCollection extends \Iterator {function add( Object $user );}
interface ConfigCollection extends \Iterator {function add( Object $Config );}
interface AlbumCollection extends \Iterator {function add( Object $Album );}
interface CategoryNewsCollection extends \Iterator {function add( Object $CategoryNews );	}
interface NewsCollection extends \Iterator {function add( Object $News );}
interface GuestCollection extends \Iterator {function add( Object $Guest);}

interface PageCollection extends \Iterator {function add( Object $Page);}

?>
