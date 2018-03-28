<?php

class Vehicule
{
    protected $name;

    public function __construct($name)
    {
        $this->name = strtoupper($name);
    }

    public function __toString()
    {
        return "C'est un vehicule : ". $this->name;
    }
}
