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
        if($_SESSION ['tipo_usu'] != 'CLI'){
            session_destroy();
            echo"<script>";
            echo "location.href = '{$link}'";
            echo"</script>";
        }
    }




    public function home(): void{
        try{
           // echo'Home - Page';

           $toView = new ToView(URL_VIEW_CLIENT);
           $toView->viewStandard('home');


        } catch(\Exception $exception){
            
        }
    }

}