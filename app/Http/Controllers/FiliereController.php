<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\filiere;
class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('admin/filiere.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/filiere.create');
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
            'libele'=>'required|max:255',
            'code'=>'required|max:255',
       ]);

        $data = new filiere([
            'libele' =>$request->get('libele'),
            'code' =>$request->get('code'),
            
        ]);
            $data->save();
            return redirect(route('admin/filiere.index'))->with('success', 'Filiere ajoute avec succes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filieres = filiere::findOrFail($id);
        return view('admin/filiere.show', compact('filieres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filieres = filiere::findOrFail($id);
        return view('admin/filiere.edit', compact('filieres'));
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
            'libele'=>'required|max:255',
            'code'=>'required'
       ]);
            $filiere = filiere::findOrFail($id);
            $filiere->libele = $request->get('libele');
            $filiere->code = $request->get('code');
            $filiere->update();

            return redirect(route('admin/filiere.index'))->with('success', 'Filiere modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filiere = filiere::findOrFail($id);
        $filiere->delete();

        return redirect(route('admin/filiere.index'))->with('success', 'Filiere est supprime avec succes');
    }
}
