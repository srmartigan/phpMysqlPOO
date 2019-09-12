<?php

namespace DiverSoft;
/**
 * Class Saludos
 */
class Saludos
{
    private $saludo;

    public function __construct()
    {
        $this->saludo = "Hola desde Saludos DiverSoft";
    }

    /**
     * @param mixed $saludo
     */
    public function setSaludo(string $saludo): void
    {
        $this->saludo = $saludo;
    }

    public function getSaludo(): string
    {
        return $this->saludo;
    }
}
