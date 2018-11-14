<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function index()
    {
        $parties=\App\Party::all();
        return view('parties/index',compact('parties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function create()
    {
        return view('parties/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        $party= new \App\Party;
        $party->nome=$request->get('nome');
        $party->numerodopartido=$request->get('numerodopartido');
        $party->sigla=$request->get('sigla');
        $party->save();

        
        return redirect('parties')->with('success', 'Information has been added');
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
        $party = \App\Party::find($id);
        return view('parties/edit',compact('party','id'));
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
        $party= \App\Party::find($id);
        $party->nome=$request->get('nome');
        $party->numerodopartido=$request->get('numerodopartido');
        $party->sigla=$request->get('sigla');
        $party->save();
        return redirect('parties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $party = \App\Party::find($id);
        $party->delete();
        return redirect('parties')->with('success','Information has been  deleted');
    }
}
