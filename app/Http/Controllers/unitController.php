<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;

class unitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('unit.index', [
            'title' => 'Data Unit',
            'ketuaUnits' => User::where('level', 'Auditee')->get(),
            'datas' => Unit::all(),
        ]);
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
        $validatedData = $request->validate([
            'nama' => 'required|unique:units',
            'user_id' => 'required'
        ]);

        Unit::create($validatedData);

        return redirect('/unit')->with('success', 'New post has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    // }

    public function show(Unit $unit)
    {
        return view('unit', [
            'title' => 'Data Unit',
            'datas' => $unit,
            'ketuaUnits' => User::where('level', 'Auditee')->get(),
        ]);
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
    public function update(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([
            'nama' => 'required|unique:units|min:3',
            'user_id' => 'required'
        ]);

        Unit::where('id', $request->id)->update($validatedData);

        return redirect('/unit')->with('success', 'Data Unit berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        Unit::destroy($unit->id);

        return redirect('/unit')->with('success', 'Post deleted successfully');
    }
}
