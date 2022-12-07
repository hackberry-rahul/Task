<?php
class fruit
{
    public $name;
    public $color;

    function get_name($n, $c)
    {
        $this->name = $n;
        $this->color = $c;
        echo $n . "\n" . $c;
        // return $n;
    }
    private function get_color($a)
    {
        $this->color = $a;
        echo $a;
    }
}


$mengo = new fruit();
$mengo->get_name("mengo", "Yellow");
//$mengo->get_color("yellow");


?>


<?php
class Fruits{
    
    public $name;
    public $color;

    
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

$apple = new Fruits();
$banana = new Fruits();
$apple->set_name('Apple');
$banana->set_name('Banana');

$apple->set_color('Red');
$banana->set_color('Yellow');

echo "<br>";
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
echo "<br>";
echo $apple->get_color();
echo "<br>";
echo $banana->get_color();
?>