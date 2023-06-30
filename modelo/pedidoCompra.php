<?php

class PedidoCompra{
    public $Fecha;
    public $Proveedor;
    public $FechaEntregaEstimada;
    public $CostoTotal;
    public $PedidoCerrado;
    public $ListLineasCompras;

    public function MostrarDatos()
    {
        
        echo 'Fecha: ' . $this->Fecha . '<br>';
        echo 'Proveedor: ' . '<br>';
        echo '--->Descripción: ' . $this->Proveedor->Descripcion . '<br>';
        echo 'Costo Total: ' . $this->CostoTotal . '<br>';
        echo 'Pedido Cerrado: ' . $this->PedidoCerrado . '<br>';
        echo 'Lineas de Compras: <br>';
        foreach ($this->ListLineasCompras as $lc) 
        {
            echo  '--->Producto: <br>';
            echo  '-------->Codigo: '. $lc->Producto->Codigo . ' <br>';
            echo  '-------->Descripcion: '. $lc->Producto->Descripcion . ' <br>';
            echo  '-------->Precio de Venta: '. $lc->Producto->PrecioVenta . ' <br>';
            echo  '--->Cantidad: '. $lc->Cantidad . ' <br>';
            echo  '--->Costo Unitario: '. $lc->CostoUnitario. ' <br>';
            echo  '--->Fue entregado: '. $lc->FueEntregado . ' <br>';
            echo  ' <br>';
        }
    }



}