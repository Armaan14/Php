<?php 

    class MyClass {         //on thare we start class 
            
        public $x, $y, $z;          

        public function __construct($a, $b)      //this is constructor
        {
            $this-> x= $a;
            $this-> y= $b;
        }

        public function MySum(){
            $this->z = $this->x + $this->y ;
            return $this->z; 
        }

    }

    $new = new MyClass(20, 10);

    /*$new->x =10;
    $new->y = 16;*/                     //this is use when you don't use constructor 

    echo $new-> MySum();
?>