<?php

namespace App\Http\Controllers;

use App\Models\Tblmotivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TblmotivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tblmotivos = Tblmotivo::paginate(10);

        return view('tablas.tblmotivo.index', compact('tblmotivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tablas.tblmotivo.create');
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
            return redirect()->route('tblmotivo.create')->withErrors($validator->errors())->withInput();
        }else{

            $tblmotivo = Tblmotivo::create($request->all());

            return redirect()->route('tblmotivo.index')
                ->with('info', 'Motivo registrado.');
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
        $tblmotivo = Tblmotivo::find($id);

        return view('tablas.tblmotivo.show', compact('tblmotivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tblmotivo = Tblmotivo::find($id);

        return view('tablas.tblmotivo.edit', compact('tblmotivo'));
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
        $tblmotivo = Tblmotivo::findOrFail($id);
        
        $input = [
            'nombre' => $request['nombre'],
            'sigla' => $request['sigla'],
            'descripcion' => $request['descripcion'],
        ];

        Tblmotivo::where('id', $id)->update($input);
        
        // $product = DB::table('products')->update($request->all());

        return redirect()->route('tblmotivo.index')
            ->with('info', 'Motivo actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tblmotivo = Tblmotivo::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }

    public function getMotivo()
    {
        $motivo = Tblmotivo::select('id','nombre')->get();
        return response()->json([
            'motivo' => $motivo,
        ]);
    }

}
