<?php

namespace App\Http\Controllers;

use App\afp;
use App\asignacion;
use App\empleado;
use App\observacion;
use App\razon_empleado;
use Illuminate\Http\Request;

class asignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asignacion=asignacion::orderby('id','DESC')->get();
        return view('admin.empleado.listadeasignaciones')->with('asignacion',$asignacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rut=request()->input('rut');
        $empleado=empleado::where('rut',$rut)->first();
        return view('admin.empleado.agregarart')->with('empleado',$empleado);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $asignacion=new asignacion();
        $now = new \DateTime();
        $asignacion->fecha_asig=$now;
        $asignacion->articulo='';
        $asignacion->empleado=request()->input('rut');
        $asignacion->casco=request()->input('casco');
        $asignacion->zapatos=request()->input('zapatos');
        $asignacion->pantalones=request()->input('pantalon');
        $asignacion->camisa=request()->input('camisa');
        $asignacion->bata=request()->input('bata');
        $asignacion->guantesmetalicos=request()->input('guantemetalico');
        $asignacion->save();
        return redirect()->action('asignacionController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
