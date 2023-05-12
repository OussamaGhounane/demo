<?php

class Voiture{
    public string $color;

    public function __construct(string $color)
    {
        $this->color=$color;
    }

    public function getColor(){
        return $this->color;
    }
}

?>