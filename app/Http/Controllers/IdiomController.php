<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdiomRequest;
use App\Http\Requests\UpdateIdiomRequest;
use App\Models\Idiom;

class IdiomController extends Controller
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
     * @param  \App\Http\Requests\StoreIdiomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIdiomRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function show(Idiom $idiom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function edit(Idiom $idiom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIdiomRequest  $request
     * @param  \App\Models\Idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIdiomRequest $request, Idiom $idiom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Idiom  $idiom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idiom $idiom)
    {
        //
    }
}
