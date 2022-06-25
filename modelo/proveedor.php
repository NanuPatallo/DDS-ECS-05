<?php

class Proveedor
{
    public $id;
    public $NombreApellido;
    public $doc;

    public $producto;

    public function MostrarDatosProveedor()
    {
        echo 'Id Proveedor: ' . $this->id . '<hr>';
        echo 'Nombre y Apellido: ' . $this->NombreApellido . '<hr>';
        echo 'Nro de Documento: ' . $this->doc . '<hr>';

        echo 'Detalles del Producto: ' . $this->producto->id . '<hr>';
        echo 'Codigo: ' . $this->producto->codigo . '<hr>';
        echo 'Descripcion: ' . $this->producto->descripcion . '<hr>';

        echo 'Marca/Detalles: ' . '<hr>';
        echo 'Id: ' . $this->producto->marca->id . '<hr>';
        echo 'Descripcion: ' . $this->producto->marca->descripcion . '<hr>';
        echo 'Codigo: ' . $this->producto->marca->codigo . '<hr>';
    }
}
