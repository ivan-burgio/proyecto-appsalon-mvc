<?php

namespace Model;

class Servicio extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre', 'precio'];

    public $id;
    public $nombre;
    public $precio;

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';
    }

    public function validar() {
        if(!$this->nombre) {
            self::$alertas['error'][] = 'Falta el nombre del servicio';
        }
        if(!$this->precio) {
            self::$alertas['error'][] = 'Falta el precio del servicio';
        }
        if(!is_numeric($this->precio) && $this->precio) {
            self::$alertas['error'][] = 'El precio no es valido';
        }
        if(strlen($this->precio) > 3) {
            self::$alertas['error'][] = 'El precio tiene que ser menor a 1000';
        }

        return self::$alertas;
    }
}