<h1>Fruits</h1>


<?php
    class Fruits{
        public $name;
        public $color;

        function set_name($name){
            $this->name=$name;
        }

        function get_name(){
            return $this->name;
            
        }
    } 
?>