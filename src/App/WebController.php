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

        public function formLogin(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('form-login');
    
    
            } catch(\Exception $exception){
    
            }
        }

        public function formRegister(): void{
            try{
    
                $toView = new ToView(URL_VIEW_WEB);
                $toView ->viewStandard('form-cadastro');
    
    
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