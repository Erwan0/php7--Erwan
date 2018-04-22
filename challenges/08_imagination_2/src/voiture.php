<?php

class Voiture extends Vehicule
{
    public function __toString()
    {
        return "C'est une  : ". $this->name;
    }
}
