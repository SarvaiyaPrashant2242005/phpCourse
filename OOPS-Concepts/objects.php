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
    
    

    $apple = new Fruits();
    $banana = new Fruits();

    $apple -> set_name('Apple');           //-> object operator --- It is used to access properties and methods of an object.
    $banana -> set_name('Banana');

    echo $apple->get_name();
    echo "<br>";
    echo $banana->get_name();
?>