<?php
class fruit 
{
    //proprties
    public $name;
    public $color;
     
    //methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple = new fruit();
$banana = new fruit();
$apple->set_name('apple');
$banana->set_name('banana');
$apple->set_color('rad');
$banana->set_color('yello');
echo " name " . $apple->get_name();
echo " color " . $apple->get_color();
echo "<br>";
echo " name " . $banana->get_name();
echo " color " . $banana->get_color();
echo "<br>";
echo "<br>";

echo"constructor";
echo "<br>";
echo "<br>";
class fruet
{
    public $name;
    public $color;

    function __construct($name)
    {
         $this->name = $name;
    }
     function get_name()
     {
        return $this->name;
     }   
}
$apple = new fruet("apple");
echo $apple->get_name();
echo "<br>";
echo "<br>";
 
?>