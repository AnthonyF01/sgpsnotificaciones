<?php

namespace App\Http\Controllers;

use App\Models\Tbldiligencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TbldiligenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tbldiligencias = Tbldiligencia::paginate(10);

        return view('tablas.tbldiligencia.index', compact('tbldiligencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tablas.tbldiligencia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = array(
            'required' => ':attribute es obligatorio.',
            'email'    => ':attribute debe ser un e-mail válido.',
            'min'      => ':attribute debe tener :min caracteres como mínimo.',
            'max'      => ':attribute debe tener :max caracteres como máximo.',
            'numeric'  => ':attribute debe ser numérico.',
            'image'    => ':attribute debe ser un archivo imagen.',
            'mimes'    => ':attribute debe ser un archivo de tipo: valores.',
        );

        $attributes = array(
            'nombre' => 'Nombre',
            'sigla' => 'Sigla',
            'descripcion' => 'Descripción',
        );

        $rules = [
            'nombre' => 'required|string',
            'sigla' => 'required|string',
            'descripcion' => 'nullable|string',
        ];
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
            'descripcion' => $request['descripcion'],
        ];

        $validator = Validator::make($input, $rules, $messages);

        $validator->setAttributeNames($attributes);

        if ($validator->fails()){
            return redirect()->route('tbldiligencia.create')->withErrors($validator->errors())->withInput();
        }else{

            $tbldiligencia = Tbldiligencia::create($request->all());

            return redirect()->route('tbldiligencia.index')
                ->with('info', 'Diligencia registrada.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tbldiligencia = Tbldiligencia::find($id);

        return view('tablas.tbldiligencia.show', compact('tbldiligencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tbldiligencia = Tbldiligencia::find($id);

        return view('tablas.tbldiligencia.edit', compact('tbldiligencia'));
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
        $tbldiligencia = Tbldiligencia::findOrFail($id);
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
            'descripcion' => $request['descripcion'],
        ];

        Tbldiligencia::where('id', $id)->update($input);
        
        // $product = DB::table('products')->update($request->all());

        return redirect()->route('tbldiligencia.index')
            ->with('info', 'Diligencia actualizada.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tbldiligencia = Tbldiligencia::find($id)->delete();

        return back()->with('info', 'Eliminada correctamente');
    }

    public function getDiligencia()
    {
        $diligencia = Tbldiligencia::select('id','nombre')->get();
        return response()->json([
            'diligencia' => $diligencia,
        ]);
    }

}
