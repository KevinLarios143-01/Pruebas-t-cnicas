<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class FacturaController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query=DB::table('facturas')->get();
        return view('factura',['facturas'=>$query]);
    }


    public function registro(productosRequest $request){
        //dd($request);
        $reg=new Producto;
        $reg->nombre=$request->get('nombre');
        $reg->descripcion=$request->get('descripcion');
        $reg->precio=$request->get('precio');
        $reg->stock=$request->get('stock');
        $reg->save();
        return redirect('productos');
    }

    public function detalles($factura, $cantidad){
        $query=DB::table('productos')->get();
        return view('productos',['productos'=>$query]);
    }

    public function eliminar(){
        $reg=Producto::findorFail($id);
        $reg->estado="0";
        $reg->update();
        return redirect('productos');
    }


}
