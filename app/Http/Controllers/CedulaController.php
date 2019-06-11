<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cedula;
use App\Tblinstancia;

class CedulaController extends Controller
{

    public $successStatus = 200;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function show(Cedula $cedula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function edit(Cedula $cedula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cedula $cedula)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cedula  $cedula
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cedula $cedula)
    {
        //
    }

    public function barcodeInfo($barcode)
    {
        $sij='';$fced='';$nced='';$fexp='';$nexp='';$csede='';$cdesc='';$cinc='';$cjuz='';
        $expediente = '';
        $juzgado = '';
        $cedula = '';
        
        for ($i = 0; $i < strlen($barcode); $i++) {
          if ($i == 0) {
            $sij=$barcode[$i];
          }
          if ($i>=1 && $i<=4) {
            $fced.=$barcode[$i];
          }
          if ($i>=5 && $i<=10) {
            $nced.=$barcode[$i];
          }
          if ($i>=11 && $i<=14) {
            $fexp.=$barcode[$i];
          }
          if ($i>=15 && $i<=19) {
            $nexp.=$barcode[$i];
          }
          if ($i>=20 && $i<=23) {
            $csede.=$barcode[$i];
          }
          if ($i>=24 && $i<=26) {
            $cdesc.=$barcode[$i];
          }
          if ($i>=27 && $i<=29) {
            $cinc.=$barcode[$i];
          }
          if ($i>=30 && $i<=32) {
            $cjuz.=$barcode[$i];
          }
        }

        $ninc = str_replace('0','',$cinc);

        $expediente = $nexp.'-'.$fexp.'-'.$ninc.'-'.$csede.'-'.'JR-PE-01';
        $cedula = $nced.'-'.$fced;
        $sjuz = Tblinstancia::where('c_instancia','=',$cjuz)->first();
        $juzgado = $sjuz->x_nom_instancia;

        if (isset($juzgado) && !empty($juzgado) && ($juzgado)) {
            return response()->json(['success' => [$expediente, $cedula, $juzgado]], $this->successStatus);
        }else {
            return response()->json(['error' => ['La instancia no existe en la base de datos. Error en el código de barras.']], $this->successStatus);
        }


    }
}
