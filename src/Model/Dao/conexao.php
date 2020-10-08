<?php 

namespace src\Model\Dao;

class conexao{
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)):
            self::$instance = new \PDO('mysql:host=localhost; dbname=medicasa; charset=utf8', 'root', '');
    endif;            
    return self:: $instance;
    }


}