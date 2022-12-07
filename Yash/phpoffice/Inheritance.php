<?php



class fruit{
    public $name;
    public $color;

    public function __construct($name , $color)
    {
      $this->name=$name;
      $this->color=$color;  
    }
    public function print(){
        echo "The fruit name is {$this->name} and color is {$this->color} . ";
    }
    
        
    }
    class mengo extends Fruit{
        public function message(){
            echo "i am mengo...........!!";
        }
        function __destruct()
        {
            echo " <br>";
            echo " end of program";
        }
    }
$mengo = new mengo("mengo", "Yellow");
$mengo->message();
echo " <br>";
$mengo->print();


?>