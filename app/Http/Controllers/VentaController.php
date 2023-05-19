<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use App\Http\Controllers\ProductoController;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    public $productoController;

    public function _construct()
    {
        $this->productoController = ProductoController();
    }

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $ventas=Venta::all();
        $productos=Producto::all();
        return view('ventas.index',compact('productos','ventas'));
    }

    public function vender(Request $request)
    {
        $id_producto = $request->producto;
        $amount = $request->cantidad;
        
        $verificar = $this->verificarStock(
            $id_producto, $amount
        );

        $producto = Producto::where('id', $id_producto)->first();
        
        
        if(!$verificar){
            $msg = "Solo se encuentran $producto->stock unidades disponibles para la venta";
            return redirect()->route('ventas.index')
            ->with('error_message',$msg);
        }else{
            $producto->stock = $producto->stock - $amount;
            
            $producto->update();
        }
         $this->insertVenta($id_producto, $amount);

         return redirect()->route('ventas.index')
         ->with('succes_message',"Producto descontado con exito");
    }

    public function verificarStock($id_producto, $amount)
    {
        $producto = Producto::where('id', $id_producto)->first();
        return $producto->stock >= $amount ? true : false;

    }

    public function insertVenta($id_producto, $amount)
    {
        $venta = new Venta;
        $venta->id_producto = $id_producto;
        $venta->amount = $amount;
        $venta->created_at = now();
        $venta->save();
    }
}