<?php
namespace src\App;


use Src\Views\ToView;

class WebController {
    public function home(): void{
        try{
           // echo'Home - Page';

           $toView = new ToView(URL_VIEW_WEB);
           $toView->viewStandard('home');


        } catch(\Exception $exception){

        }
    }

        public function login(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('login-teste');
    
    
            } catch(\Exception $exception){
    
            }
        }

        public function formRegister(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('cadastrar');
    
    
            } catch(\Exception $exception){
    
            }
        }

        public function questions(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('ajuda_default');
    
    
            } catch(\Exception $exception){
    
            }
        }


        public function loggedHome(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('home-logado');
    
    
            } catch(\Exception $exception){
    
            }
        }


        public function workWithUs(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('trabalhe-conosco');
    
    
            } catch(\Exception $exception){
    
            }
        }


        public function especialidades(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('especialidades');
    
    
            } catch(\Exception $exception){
    
            }
        }


        public function error($data): void{
            try{
                if($data["errocode"] == '404' ){
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('404', $data);
                }
            } catch(\Exception $exception){
    
            }
        }
}