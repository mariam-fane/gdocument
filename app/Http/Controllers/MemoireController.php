<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\memoire;
use App\Models\projet;

class MemoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memoires = Memoire::orderBy('type', 'asc')->paginate(5);
        return view('admin/memoire.index', compact('memoires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projets = projet::all();
        return view('admin/memoire.create')->with('projets', $projets);
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
            'type'=>'required|max:255',
            'fichier'=>'required',
            'specialite'=>'required',
            'projets_id'=>'required'
       ]);

        $data = new memoire([
            'type' =>$request->get('type'),
            'fichier' =>$request->get('fichier'),
            'specialite'=>$request->get('specialite'),
            'projets_id' =>$request->get('projets_id')
        ]);
            $data->save();
            return redirect(route('admin/memoire.index'))->with('success', 'Memoire ajoute avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $memoires = memoire::findOrFail($id);
        return view('admin/memoire.show', compact('memoires'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $projets = projet::all();
        $memoires = memoire::findOrFail($id);
        return view('admin/memoire.edit', compact('memoires'))->with('projets', $projets);
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
    
        $memoires = memoire::findOrFail($id);
        $memoires->type = $request->get('type');
        $memoires->fichier = $request->get('fichier');
        $memoires->specialite = $request->get('specialite');
        $memoires->projets_id = $request->get('projets_id');
        $memoires->update();

        return redirect(route('admin/memoire.index'))->with('success', 'Memoire modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memoires = memoire::findOrFail($id);
        $memoires->delete();

        return redirect(route('admin/memoire.index'))->with('success', 'Memoire est supprime avec succes');
    }
}
