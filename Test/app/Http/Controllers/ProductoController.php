<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\producto as productosRequest;
use App\Models\Producto;


class ProductoController extends Controller
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
        $query=DB::table('productos')->get()->where('estado',"1");
        return view('producto',['productos'=>$query]);
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

    public function eliminar($id){

        $reg=Producto::findorFail($id);
        $reg->estado="0";
        $reg->update();
        return redirect('productos');
    }

}
