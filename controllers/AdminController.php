<?php

namespace Controllers;

use Model\Cita;
use MVC\Router;
use Model\Servicio;
use Model\CitaServicio;

class AdminController {
    public static function index(Router $router) {
        session_start();

        $router->render('admin/index', [
            'nombre' => $_SESSION['nombre']
        ]);
    }
}