<?php
namespace App\Controllers;
use App\Controllers\InterfaceController;
use App\Models\UserService;
use App\Models\Usuario;
use App\Controllers\Auth;

class CadastroController implements InterfaceController
{   
    public static function view()
    {
        return require_once "./Views/cadastro/index.php";
    }

    public static function request()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nome = $_POST['nome'];
            $sobrenome = $_POST['sobrenome'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];
            $telefone = $_POST['telefone'];

            $usuario = new Usuario(0, $nome, $sobrenome, $email, $password, $telefone);
            $service = new UserService();
            $userService = $service->create($usuario);

            if($userService){
                Auth::authLogin(['id' => $userService, 'email' => $usuario->email]);
            }
        }
    }
}