<?php 

require __DIR__.'/vendor/autoload.php';

use CoffeeCode\Router\Router;

$router = new Router(ROOT);

/* Controllers */

// definindo a namespace dos controllers

$router->namespace("src\App");

// Controller web 
// WEB
$router->group(null);
$router->get("/", "WebController:home");

$router->group("login");
$router->get("/", "WebController:login");

$router->group("cadastra-se");
$router->get("/", "WebController:formRegister");

$router->group("duvidas");
$router->get("/", "WebController:questions");

$router->group("home-logado");
$router->get("/", "WebController:loggedHome");

$router->group("trabalhe-conosco");
$router->get("/", "WebController:workWithUs");

$router->group("especialidades");
$router->get("/", "WebController:especialidades");


// ADM
$router->group("admin");
$router->get("/", "AdminController:home");
$router->get("/usuarios", "AdminController:users");
$router->get("/usuario/{cod_usu}", "AdminController:user");
$router->post("/usuario/salvar/{cod_usu}", "AdminController:saveUser");

//AUTH
$router->group("authentication");
$router->post("/logon", "Auth:logon");
$router->post("/logoff", "Auth:logoff");
$router->post("/register", "Auth:register");



// erros

$router->group("error");
$router->get("/{errocode}", "WebController:error");

$router->dispatch();

if($router->error()){
    $router->redirect("/error/{$router->error()}");
}






