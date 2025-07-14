<?php
namespace App\Controllers;

class Auth
{
    public static function authLogout()
    {
        unset($_SESSION['logado']);
        session_destroy();
        header('Location:'. LOGIN);
    }

    public static function authLogin($data)
    {
        if(!isset($_SESSION['logado'])){
            $_SESSION['logado'] = $data;
        }

        header('Location:'. HOME);
    }
}