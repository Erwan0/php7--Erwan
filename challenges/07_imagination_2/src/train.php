<?php

class Train extends Vehicule
{
    public function __toString()
    {
        return "C'est un  : ". $this->name;
    }
}
