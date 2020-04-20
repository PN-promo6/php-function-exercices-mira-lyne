<?php
class Character
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function Presentation()
    {
        echo "Hello, My name is "  . $this->name .  " I have " . $this->age . " years old";
    }
}

$charact = new Character("kira", 20);
//$charact->name = "Kira";
//$charact->age = "20";

echo $charact->Presentation();
