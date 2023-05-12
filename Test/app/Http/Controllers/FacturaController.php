<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\factura as facturasRequest;
use App\Models\Factura;

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

        return view('factura',['facturas'=>$query, ]);
    }


    public function registro(facturasRequest $request){
        //dd($request);
        $reg=new Factura;
        $reg->fecha=$request->fecha;
        $reg->cliente=$request->cliente;
        $reg->tipopago=$request->tipopago;
        $reg->save();
        return view('factura',['facturas'=>$reg]);
    }

    public function datas(){
        $query=DB::table('clientes')->get()->where('estado',"1");
        return view('factura',['facturas'=>$query]);
    }


    /*public function detalles($factura){
        $query = DB::table('detalle_factura')
        ->join('factura', function (JoinClause $join) {
            $join->on('factura.factura', '=', 'detalle_factura.factura')->orOn();
        })
        ->get();
        return view('facturalF',['facturalF'=>$query]);
    }

    public function eliminar(){
        $reg=Producto::findorFail($id);
        $reg->estado="0";
        $reg->update();
        return redirect('productos');
    }*/


}
