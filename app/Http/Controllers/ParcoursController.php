<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\parcours;
use App\Models\filiere;

class ParcoursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parcours = Parcours::orderBy('libelle', 'asc')->paginate(5);
        return view('admin/parcours.index', compact('parcours'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filieres = filiere::all();
        return view('admin/parcours.create')->with('filieres', $filieres);
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
            'libelle'=>'required|max:255',
            'code'=>'required|max:255',
            'filieres_id'=>'required',
       ]);

        $data = new parcours([
            'libelle' =>$request->get('libelle'),
            'code' =>$request->get('code'),
            'filieres_id' =>$request->get('filieres_id')
        ]);
            $data->save();
            return redirect(route('admin/parcours.index'))->with('success', 'Parcours ajoute avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parcours = parcours::findOrFail($id);
        return view('admin/parcours.show', compact('parcours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filieres = filiere::all();
        $parcours = parcours::findOrFail($id);
        return view('admin/parcours.edit', compact('parcours'))->with('filieres', $filieres);
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
            'libelle'=>'required|max:255',
            'code'=>'required|max:255',
            'filieres_id'=>'required',
       ]);

       $parcours = parcours::findOrFail($id);
            $parcours->libelle = $request->get('libelle');
            $parcours->code = $request->get('code');
            $parcours->filieres_id = $request->get('filieres_id');
            $parcours->update();

            return redirect(route('admin/parcours.index'))->with('success', 'Parcours modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parcours = parcours::findOrFail($id);
        $parcours->delete();

        return redirect(route('admin/parcours.index'))->with('success', 'Parcours est supprime avec succes');
    }
}
