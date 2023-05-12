<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests\cliente as clientes;
use App\Models\Cliente;

class ClienteController extends Controller
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

    public function registro(clientes $request){
        //dd($request);
        $reg=new Cliente;
        $reg->nombre=$request->get('nombre');
        $reg->direccion=$request->get('direccion');
        $reg->email=$request->get('email');
        $reg->telefono=$request->get('telefono');
        $reg->nit=$request->get('nit');
        $reg->save();
        return redirect('clientes');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $query=DB::table('clientes')->get()->where('estado',"1");
        return view('cliente',['clientes'=>$query]);
    }

    public function eliminar($id){
        $reg=Cliente::findorFail($id);
        $reg->estado="0";
        $reg->update();
        return redirect('clientes');
    }
}
