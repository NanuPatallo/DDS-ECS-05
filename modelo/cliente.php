<?php

class Clientes
{
    public $id;
    public $NombreApellido;
    public $doc;

    public function MostrasDatosCliente()
    {
        echo 'Id Cliente: ' . $this->id . '<hr>';
        echo 'Nombre y Apellido: ' . $this->NombreApellido . '<hr>';
        echo 'Nro de Documento: ' . $this->doc . '<hr>';
    }
}
