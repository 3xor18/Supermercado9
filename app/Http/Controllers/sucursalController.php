<?php

namespace App\Http\Controllers;
use App\sucursal;
use Illuminate\Http\Request;

class sucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursal=sucursal::all();
        return view('admin.sucursal.mostrarSucursal')->with('sucursal',$sucursal);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sucursal.crearSucursal');
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


        $sucursal=new sucursal();
        $sucursal->nombre=request()->input('nombre');
        $sucursal->telefono=request()->input('telefono');
        $sucursal->direccion=request()->input('direccion');
        $sucursal->foto=$name;
        $sucursal->save();
        return redirect()->action('sucursalController@index');
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
    public function edit(sucursal $sucursal)
    {
        return view('admin.sucursal.editSucursal',['sucursal'=>$sucursal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, sucursal $sucursal)
    {
        //preguntamos si nos pasasan fotos
        if($request->hasFile('foto')){
            //si pasan fotos, recibimos el archivo
            $file=$request->file('foto');
            //agregamos la fecha al nombre para evitar imagenes repetidas
            $name=time().$file->getClientOriginalName();
            //movemos a la carpeta images
            $file->move(public_path().'/img/',$name);
            //actualizamos trainer
            $sucursal->foto=$name;
        }else{
            $sucursal->foto=$sucursal->foto;
        }
        $sucursal->nombre=request()->input('nombre');
        $sucursal->telefono=request()->input('telefono');
        $sucursal->direccion=request()->input('direccion');
        $sucursal->save();
        return redirect()->action('sucursalController@index');
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
