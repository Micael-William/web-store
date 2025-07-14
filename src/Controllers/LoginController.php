<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;
use App\Models\UserService;
use App\Models\Usuario;

class LoginController implements InterfaceController
{   
    public static function view()
    {
        return require_once "./Views/login/index.php";
    }

    public static function request()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];

            $usuario = new Usuario(0, '', '', $email, '', '','','','','');
            $userService = new UserService();

            $service = $userService->read($usuario);

            if($service){
                Auth::authLogin($service);
            }
        }
    }
}
