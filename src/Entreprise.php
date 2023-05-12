<?php

class Entreprise{
    public string $name;

    public function __construct(string $name)
    {
        $this->name=$name;
    }

    public function getName(){
        return "<br>".$this->name;
    }
}

?>