<?php

    require_once('../../config.php');

    class Turno {
        private $id;
        private $fecha_desde;
        private $hora_desde;
        private $fecha_hasta;
        private $hora_hasta;
        

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
         * Get the value of fecha_desde
         */ 
        public function getFecha_desde()
        {
                return $this->fecha_desde;
        }

        /**
         * Set the value of fecha_desde
         *
         * @return  self
         */ 
        public function setFecha_desde($fecha_desde)
        {
                $this->fecha_desde = $fecha_desde;

                return $this;
        }

        /**
         * Get the value of hora_desde
         */ 
        public function getHora_desde()
        {
                return $this->hora_desde;
        }

        /**
         * Set the value of hora_desde
         *
         * @return  self
         */ 
        public function setHora_desde($hora_desde)
        {
                $this->hora_desde = $hora_desde;

                return $this;
        }

        /**
         * Get the value of fecha_hasta
         */ 
        public function getFecha_hasta()
        {
                return $this->fecha_hasta;
        }

        /**
         * Set the value of fecha_hasta
         *
         * @return  self
         */ 
        public function setFecha_hasta($fecha_hasta)
        {
                $this->fecha_hasta = $fecha_hasta;

                return $this;
        }

        /**
         * Get the value of hora_hasta
         */ 
        public function getHora_hasta()
        {
                return $this->hora_hasta;
        }

        /**
         * Set the value of hora_hasta
         *
         * @return  self
         */ 
        public function setHora_hasta($hora_hasta)
        {
                $this->hora_hasta = $hora_hasta;

                return $this;
        }

        public function obtenerTodos(){
            /*
             obtiene todos los turnos
            */
            $mysql = new Connection();
            $query = 'Select * from turnos';
            $result = $mysql->consultar($query);
            $rows = array();
            while($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            return $rows;
        }

    }

?>