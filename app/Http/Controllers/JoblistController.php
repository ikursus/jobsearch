<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoblistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekod_joblist = DB::table('joblist')->get();

        return view('template_joblist/senarai_joblist', compact('rekod_joblist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('template_joblist/add_joblist');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'salary' => 'required|numeric'
        ]);
        
        $data = $request->only('title', 'description', 'salary', 'position', 'education');

        DB::table('joblist')->insert($data);

        return redirect()->route('indexJoblist');
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
        $joblist = DB::table('joblist')
        ->where('id', '=', $id)
        ->first();

        return view('template_joblist/edit_joblist', compact('joblist'));
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
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'salary' => 'required|numeric'
        ]);
        
        $data = $request->only('title', 'description', 'salary', 'position', 'education');

        DB::table('joblist')
        ->where('id', '=', $id)
        ->update($data);

        return redirect()->route('indexJoblist')
        ->with('mesej_sukses', 'Rekod berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('joblist')
        ->where('id', '=', $id)
        ->delete();

        return redirect()->route('indexJoblist')
        ->with('mesej_sukses', 'Rekod berjaya dihapuskan!');
    }
}
