<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas=Venta::all();
        $productos=Producto::all();
        return view('ventas.index',compact('productos', 'ventas'));
    }

    public function vende(Request $request)
    {
        $id_producto = $request->id_producto;
        $amount = $request->amount;

        $verify = $this->verifyStock(
            $id_producto, $amount
        );

        $producto = $this->productos->showProduct($id_producto);

        if (!$verify) {
            $msg = "Solo se encuentran $producto->stock unidades disponibles para venta";
            return redirect()->route('ventas.index')
                ->with('error_message', $msg);
        } else {

            $producto['stock'] = $producto['stock'] - $amount;
            $producto->update();
        }

        $this->insertSale($id_producto, $amount);

        return redirect()->route('ventas.index')
            ->with('success_message', "Producto descontado con exito.");
    }
    private function verifyStock($id_producto, $amount)
    {
        $product = $this->productos->showProduct($id_producto);

        return $producto->stock >= $amount ? true : false;
    }

    public function insertSale($id_producto, $amount): void
    {
        $this->producto->insertSale($id_producto, $amount);
    }
}
