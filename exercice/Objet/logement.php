<?php

class house extends logement
{
    private $ville;

    public function __construct($name, string $ville)
    {
        parent::__construct($name);

        $this->ville = $ville;
    }
}
