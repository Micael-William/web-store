<?php
namespace App\database;

class Conexao
{
    private static $instance;

    public static function getConexao()
    {
        if(!isset(self::$instance)){

           self::$instance =  new \PDO('mysql:host=localhost;dbname=db_webstore','root', '');
           return self::$instance;
        }else{
            return self::$instance;
        }
    }
}

