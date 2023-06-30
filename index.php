<?php

require_once 'modelo/pedidoCompra.php';
require_once 'modelo/lineaCompra.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$pr = new Proveedor();
$pr->Id = 1;
$pr->Descripcion = 'Descripcion del proveedor';

$p1 = new Producto();
$p1->Codigo = 1;
$p1->Descripcion = 'Producto N°1';
$p1->PrecioVenta = '$ 4500';

$p2 = new Producto();
$p2->Codigo = 2;
$p2->Descripcion = 'Producto N°2';
$p2->PrecioVenta = '$ 6700';

$lc1 = new LineaCompra();
$lc1->Producto = $p1;
$lc1->Cantidad = '5';
$lc1->CostoUnitario = 4500;
$lc1->FueEntregado = TRUE;

$lc2 = new LineaCompra();
$lc2->Producto = $p2;
$lc2->Cantidad = '3';
$lc2->CostoUnitario = 6700;
$lc2->FueEntregado = FALSE;

$pc = new PedidoCompra();
$pc->Fecha = '30/06/2023';
$pc->Proveedor = $pr;
$pc->FechaEntregaEstimada = '05/07/2023';
$pc->CostoTotal  = '$ 75.000';
$pc->PedidoCerrado = True;
$pc->ListLineasCompras[] = $lc1;
$pc->ListLineasCompras[] = $lc2;
$pc->MostrarDatos();