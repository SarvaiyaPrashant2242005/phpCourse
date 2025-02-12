<?php
    class Fruits{
        public $name;
        public $color;

        function __construct($name,$color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "A {$this->name} is a fruit and the color of fruit is {$this->color}";
        }

    }   
    class Cherry extends Fruits{
        public function messege(){
            echo "IS cherry a fruit or a berry ????";
        }
    }
    $cherry = new Cherry("Cherry" , "Blue");
    $cherry->messege();
    $cherry->intro();
?>
