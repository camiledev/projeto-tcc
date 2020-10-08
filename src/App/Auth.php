<?php
namespace src\App;
use src\Models\Domain\Acesso;
use src\Models\Domain\AcessoDao;


class Auth {
    public function logon($data): void{
        try{
            
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $acesso = new Acesso();
            $acesso->setEmail($data['email']);
            $acesso->setSenha($data['senha']);

            $acessoDao = new UsuarioDao();
            $result = $acessoDao->login($acesso);

            if(count($result > 0)){
                if($result[0]['cod_usu'] == 'A'){
                    $_SESSION['cod_usu'] = $result[0]['cod_usu'];
                    $_SESSION['nome_usu'] = $result[0]['nome_usu'];
                    $_SESSION['email_usu'] = $result[0]['email_usu'];
                    $_SESSION['senha_usu'] = $result[0]['senha_usu'];
                    $_SESSION['tipo_usu'] = $result[0]['tipo_usu'];

                    switch ($resut[0]['tipo_usu']) {
                        case 'ADM':
                            $url = 'admin';
                            break;
                            
                        case 'CLI':
                            $url = 'client';
                            break;

                        default:
                            $url = 'authentication/logoff';
                            break;
                    }
                        echo"<script>";
                        echo"location.href='' . url($url). '' ";
                        echo"</script>";

                }else{
                    echo"Usuario Inativo, contate o administrador";
                }
            }else{
                echo"Usuario ou senha não confere";
            }


        } catch(\Exception $exception){
            
        }
    }

    public function logoff($data):void {
        try {
            session_destroy();
            echo"<script>";
                    echo"location.href='' . url(). '' ";
                    echo"</script>";

        } catch (\Exception $exception) {
            //throw $th;
        }
    }

    public function register($data):void {
        try{
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $usuario = new Usuario();

            $usuario->setNome($data['nome_usu']);
            $usuario->setEmai($data['email_usu']);
            $usuario->setSenha($data['senha_usu']);
            $usuario->setTipo($data['CLI']);
            $usuario->setCod($data['A']);
            
            $usuarioDao = new UsuarioDao();

            if($data['senha_usu'] == $data{'confPwd'}){
                if($usuarioDao -> create($usuario)){
                    //direcionando para fazer o login
                    echo"<script>";
                    echo"location.href=''. url(login). '' ";
                    echo"</script>";
                }else{
                    echo"Não foi possivel reaizar o cadastro!";
                }
            }else{
                echo"Confirmaçao de senha não confere";
            }


        }catch(\Exception $exception){

        }

    }



}