<?php
    class Fruits{
        public $name;
        public $color;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }

        function __destruct(){
            echo "The Fruits is {$this->name} and the color is {$this->color}.";
        }
        function get_name(){
            return $this->name;
        }

        function get_color(){
            return $this->color;
        }
    }
    echo "<h1>Fruits using Destructor</h1>";

    $stawberry = new Fruits("Stawberry","Pink");


?>
