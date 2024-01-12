<?php
class Animal
{
    public $name;
    public $legs;
    public $cold_blooded;

    //Tampung data yang dikirim
    public function __construct($name, $legs = 4, $cold_blooded = "No")
    {
        $this->name = $name;
        $this->legs = $legs;
        $this->cold_blooded = $cold_blooded;
    }

    protected function get_name()
    {
        return $this->name;
    }

    protected function get_legs()
    {
        return $this->legs;
    }

    protected function get_cold_blooded()
    {
        return $this->cold_blooded;
    }

    //tampung data frog
    public function dataFrog()
    {
        echo "<br> Name: {$this->name} <br> Legs: {$this->legs} <br> Cold Blooded: {$this->cold_blooded} <br>";
    }

    public function shaunTheShip()
    {
        echo "Name: {$this->name} <br> Legs: {$this->legs} <br> Cold Blooded: {$this->cold_blooded} <br>";
    }
}
