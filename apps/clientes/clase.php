<?php
 require_once('../../config.php');

 class Cliente{
    private $id;
    private $nombre;
    private $apellido;

    

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function obtenerTodos($nro_pagina){
        /*
         obtiene todos los clientes para el listado
        */
        $mysql = new Connection();
        $query = 'Select * from clientes limit '.$nro_pagina.', 2';
        $result = $mysql->consultar($query);
        return $result;
    }

    public function cantidadRegistros(){
         /*
         obtiene la cantidad de registros
        */
        $mysql = new Connection();
        $query = 'Select count(*) as cantidad from clientes';
        $result = $mysql->consultar($query);
        return $result->fetch_assoc();
    }

 }
?>