<?php
namespace src\App;


use Src\Views\ToView;

class AdminController {

    public function __construct()
    {
        $link = url();
        if(!$_SESSION){
            session_destroy();
            echo"<script>";
            echo "location.href = '{$link}'";
            echo"</script>";
        }
        if($_SESSION ['tipo_usu'] != 'ADM'){
            session_destroy();
            echo"<script>";
            echo "location.href = '{$link}'";
            echo"</script>";
        }
    }




    public function home(): void{
        try{
           // echo'Home - Page';

           $toView = new ToView(URL_VIEW_ADMIN);
           $toView->viewStandard('home');


        } catch(\Exception $exception){
            
        }
    }


    public function users(): void{
        try{
            $acessoDao = new AcessoDao();
            $data = $acessoDao->read();
            $toView = new ToView(URL_VIEW_ADMIN);
            $toView->viewStandard('usuarios', $data);


        } catch(\Exception $exception){
            
        }
    }

    public function user($data): void{
        try{
            $usuario = new Usuario();
            $usuario->setcodUsu($data['codUsu']);
            $usuarioDao = new UsuarioDao();
            $data = $UsuarioDao->read();
            $toView = new ToView(URL_VIEW_ADMIN);
            $toView->viewStandard('usuario', $data);


        } catch(\Exception $exception){
            
        }
    }

    public function saveUser($data): void{
        try{
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPED);
            
            $usuario = new Usuario();
            $usuario->setcodUsu($data['codUsu']);
            $usuario->setStatusUsu($data['status']);
            $usuario->setCepUsu($data['cep']);
            $usuario->getNumUsu($data['num']);
            $usuario->getComplUsu($data['compl']);
            $usuario->getCidadeUsu($data['cidade']);
            $usuario->getUfUsu($data['uf']);
            $usuario->getRuaUsu($data['rua']);
            $usuario->getBairroUsu($data['bairro']);

            $usuarioDao = new UsuarioDao();
            $UsuarioDao->updateUserId($usuario);
            $data = $usuarioDao->readUserId($usuario);
            $toView = new ToView(URL_VIEW_ADMIN);
            $toView->viewStandard('usuario', $data);


        } catch(\Exception $exception){
            
        }
    }
}