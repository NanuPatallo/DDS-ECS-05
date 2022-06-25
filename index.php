<?php

require_once "modelo/marca.php";
require_once "modelo/producto.php";
require_once "modelo/proveedor.php";
require_once "modelo/cliente.php";

$m = new Marca();
$m->id = 1010;
$m->descripcion = 'Cosmos';
$m->codigo = 57946;

$prod = new Producto();
$prod->id = 1000;
$prod->codigo = 233365;
$prod->descripcion = 'Agua Micelar';
$prod->marca = $m;

$prov = new Proveedor();
$prov->id = 1;
$prov->NombreApellido = 'Carlos Pintos';
$prov->doc = '24.355.100';
$prov->producto = $prod;

$c = new Clientes();
$c->id = 110;
$c->NombreApellido = 'Corina Martinez';
$c->doc = '38.726.924';


$c->MostrasDatosCliente();
$prov->MostrarDatosProveedor();
