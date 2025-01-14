<?php 
require_once __DIR__ . '/../includes/app.php';


use MVC\Router;
use Controllers\AppController;
use Controllers\DetalleController;
use Controllers\LoginController;
use Controllers\ProductoController;

$router = new Router();
$router->setBaseURL('/' . $_ENV['APP_NAME']);

$router->get('/', [LoginController::class,'index']);
$router->get('/menu', [LoginController::class,'menu']);
$router->get('/logout', [LoginController::class,'logout']);
$router->post('/API/login', [LoginController::class,'loginAPI']);
$router->get('/productos/datatable', [ProductoController::class,'datatable']);
$router->get('/API/productos/buscar', [ProductoController::class,'buscarAPI']);
$router->get('/productos/estadistica', [DetalleController::class,'estadistica']);
$router->get('/API/productos/estadistica', [DetalleController::class,'detalleVentasAPI']);

// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();
