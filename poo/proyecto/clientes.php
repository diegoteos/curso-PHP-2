<?php

class Clientes
{

    private $dpi;
    private $email;

    // Contructor de la clase en php inferior a la version 6
    function Clientes($dpi_externo, $email_externo)
    {
        $this->dpi = $dpi_externo;
        $this->email = $email_externo;
    }

    // Contructor php 6 o superior
    function __construct($dpi_externo, $email_externo)
    {
        $this->dpi = $dpi_externo;
        $this->email = $email_externo;
    }

    public function verCliente()
    {
        $datos = array(
            $this->dpi,
            $this->email
        );
        return  $datos;
    }
    /* FUNCIONES PARA VER LOS ATRIBUTOS 
    public function verDPI()
    {
        return  $this->dpi;
    }
    public function verEmail()
    {
        return  $this->email;
    }
    */
    // MODIFICAR ATRIBUTOS
    public function getDPI()
    {
        return  $this->dpi;
    }
    public function setDPI($dpi_externo)
    {
        $this->dpi = $dpi_externo;
    }
    public function getEmail()
    {
        return  $this->email;
    }
    public function setEmail($email_externo)
    {
        $this->email = $email_externo;
    }
}
