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
        public $weight;

      
            public function __construct($name,$color,$weight){
                    $this->name = $name;
                    $this->color = $color;
                    $this->weight = $weight;
            }

            public function intro(){
                echo "The fruit is {$this->name},color is {$this->color} and the weigth is {$this->weight}...";
            }
        }
    
    $cherry = new Cherry("Cherry" , "Blue",45); 
    // $cherry->messege();
    $cherry->intro();
?>
