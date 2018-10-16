<?php

namespace App\Http\Controllers;
use App\afp;
use App\asignacion;
use App\empleado;
use App\observacion;
use App\razon_empleado;
use Illuminate\Http\Request;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleado=empleado::all();
        return view('admin.empleado.mostrarEmpleado')->with('empleado',$empleado);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $afp=afp::all();
        return view('admin.empleado.crearEmpleado')->with('afp',$afp);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //preguntamos si nos pasasan fotos
        if($request->hasFile('foto')){
            //si pasan fotos, recibimos el archivo
            $file=$request->file('foto');
            //agregamos la fecha al nombre para evitar imagenes repetidas
            $name=time().$file->getClientOriginalName();
            //movemos a la carpeta images
            $file->move(public_path().'/img/',$name);
        }


        $empleado=new empleado();
        $empleado->nombre=request()->input('nombre');
        $empleado->apellido=request()->input('apellido');
        $empleado->nacionalidad=request()->input('nacionalidad');
        $empleado->estudios=request()->input('estudios');
        $empleado->rut=request()->input('rut');
        $empleado->direccion=request()->input('direccion');
        $empleado->celular=request()->input('celular');
        $empleado->celular_emergencia=request()->input('celular_emergencia');
        $empleado->correo=request()->input('correo');
        $empleado->sexo=request()->input('sexo');
        $empleado->fecha_nac=request()->input('fecha_nac');
        $empleado->camisa=request()->input('camisa');
        $empleado->pantalon=request()->input('pantalon');
        $empleado->zapatos=request()->input('zapatos');
        $empleado->guantes=request()->input('guantes');
        $empleado->casco=request()->input('casco');
        $empleado->estado_civil=request()->input('estado_civil');
        $empleado->alergias=request()->input('alergias');
        $empleado->enfermedades=request()->input('enfermedades');
        $empleado->medicamentos=request()->input('medicamentos');
        $empleado->afp=request()->input('afp');
        $empleado->salud=request()->input('salud');
        $empleado->foto=$name;
        $empleado->save();
        $razon_empleado=new razon_empleado();
        $razon_empleado->empleado=request()->input('rut');
        $razon_empleado->razon=request()->input('razon');
        $razon_empleado->fecha_ini=request()->input('fecha_ini');
        $razon_empleado->estatus="contratado";
        $razon_empleado->cargo=request()->input('cargo');
        $razon_empleado->sucursal=request()->input('sucursal');
        $razon_empleado->st="activo";
        $razon_empleado->save();
        $observacion=new observacion();
        $observacion->empleado=request()->input('rut');
        $observacion->observacion=request()->input('observacion');
        $now = new \DateTime();
        $observacion->fecha=$now;
        $observacion->save();
        return redirect()->action('empleadoController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {
        return view('admin.empleado.agregarArticulos',['empleado'=>$empleado]);
    }

    public function show2()
    {
        $rut=request()->input('rut');
        $empleado=empleado::where('rut',$rut)->first();
        return view('admin.empleado.agregarart')->with('empleado',$empleado);
    }

    public function asig()
    {
        $rut=request()->input('rut');
        $empleado=empleado::where('rut',$rut)->first();
        return view('admin.empleado.agregarart')->with('empleado',$empleado);
    }

    public function addart(Request $request)
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
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
