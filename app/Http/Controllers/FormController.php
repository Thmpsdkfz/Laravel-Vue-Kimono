<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KimonoValidation;
use App\Kimono;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('form');
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

    public function ajax_kimonos(){
        $selectKimonos = new Kimono();
        $kimonos = $selectKimonos->all();
        return $kimonos;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KimonoValidation $request)
    {
        $kimono = new Kimono();
        $kimono->giBrand = $request->giBrand;
        $kimono->giModel = $request->giModel;
        $kimono->giSize = $request->giSize;
        $kimono->giColor = $request->giColor;
        $kimono->giPrice = $request->giPrice;
        $kimono->giHaveBag = $request->giHaveBag;

        $kimono->save();
        return redirect('/');
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
