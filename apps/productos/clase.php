<?php
 require_once('../../config.php');

 class Producto{
     
     private $id;
     private $nombre;
     private $stock_actual;
     private $stock_minimo;
     private $precio_venta;
     private $precio_compra;
     private $estado;



     /**
      * Get the value of stock_minimo
      */ 
     public function getStock_minimo()
     {
          return $this->stock_minimo;
     }

     /**
      * Set the value of stock_minimo
      *
      * @return  self
      */ 
     public function setStock_minimo($stock_minimo)
     {
          $this->stock_minimo = $stock_minimo;

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
      * Get the value of stock_actual
      */ 
     public function getStock_actual()
     {
          return $this->stock_actual;
     }

     /**
      * Set the value of stock_actual
      *
      * @return  self
      */ 
     public function setStock_actual($stock_actual)
     {
          $this->stock_actual = $stock_actual;

          return $this;
     }



     /**
      * Get the value of precio_compra
      */ 
     public function getPrecio_compra()
     {
          return $this->precio_compra;
     }

     /**
      * Set the value of precio_compra
      *
      * @return  self
      */ 
     public function setPrecio_compra($precio_compra)
     {
          $this->precio_compra = $precio_compra;

          return $this;
     }

     /**
      * Get the value of estado
      */ 
     public function getEstado()
     {
          return $this->estado;
     }

     /**
      * Set the value of estado
      *
      * @return  self
      */ 
     public function setEstado($estado)
     {
          $this->estado = $estado;

          return $this;
     }

     /**
      * Get the value of precio_venta
      */ 
     public function getPrecio_venta()
     {
          return $this->precio_venta;
     }

     /**
      * Set the value of precio_venta
      *
      * @return  self
      */ 
     public function setPrecio_venta($precio_venta)
     {
          $this->precio_venta = $precio_venta;

          return $this;
     }

     public function obtenerTodos(){
        /*
         obtiene todos los productos para el listado
        */
        $mysql = new Connection();
        $query = 'Select * from productos ';
        $result = $mysql->consultar($query);
        return $result;
    }
 }
?>