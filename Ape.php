<?php
class Ape extends Animal
{
    //tampung data ape
    public function __construct($name, $legs = 2, $cold_blooded = "No")
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    protected function dataApe()
    {
        echo "<br> Name: {$this->name} <br> Legs: {$this->legs} <br> Cold Blooded: {$this->cold_blooded} <br> Yell: ";
    }

    public function yell()
    {
        $this->dataApe();
        echo "Auooo <br>";
    }
}
?>