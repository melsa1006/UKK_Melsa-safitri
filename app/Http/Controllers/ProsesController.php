<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsesController extends Controller
{
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
        $a=$request->a;
        $b=$request->b;
        $op=$request->op;

        if($op=='tambah'){
            $hasil=$a+$b;
        }elseif($op=='kurang'){
            $hasil=$a-$b;
        }elseif($op=='bagi'){
            if($b!=0) {
                // }if($b>0 || $b<0) {
            $hasil=$a/$b;
                }else{
                    $hasil="tidak boleh membagi dengan 0";
                }
        }elseif($op=='kali'){
            $hasil=$a*$b;
        }elseif ($op == 'reset'){
            //Reset nilai-nilai ang diperlukan 
            $a = 0; // Nilai default untuk $a saat mereset
            $b = 0; // Nilai default untuk $b saat mereset
            $hasil = 0;
        }
        return view('kalkulator.hasil',compact('hasil'));
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
