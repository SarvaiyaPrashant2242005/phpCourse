<?php
    class Fruits{
        public $name;
        public $color;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }

        function get_name(){
            return $this->name;
        }

        function get_color(){
            return $this->color;
        }
    }
    echo "<h1>Fruits using constructor</h1>";

    $stawberry = new Fruits("Stawberry","Pink");
    echo $stawberry->get_name() .",";
    echo $stawberry->get_color();

?>
