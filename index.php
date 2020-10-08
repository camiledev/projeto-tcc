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
$router->get("/", "WebController:formLogin");

$router->get("/cadastra-se", "WebController:formRegister");

// CLIENT
$router->group("cliente");
$router->get("/", "WebController:home");



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






