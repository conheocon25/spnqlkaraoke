<?php
namespace MVC\Domain;

interface Finder {
    function find( $id );
    function findAll();

    function update( Object $object );
    function insert( Object $obj );
    //function delete();
}

interface AppFinder  extends Finder {}
interface UserFinder  extends Finder {}
interface ConfigFinder  extends Finder {}
interface AlbumFinder  extends Finder {}
interface CategoryNewsFinder  extends Finder {}
interface NewsFinder  extends Finder {}
interface GuestFinder extends Finder {}

?>