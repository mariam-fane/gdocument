<?php

namespace App\Http\Controllers;

use App\Models\parcours; 
use App\Models\personnel;
use Illuminate\Http\Request;
use App\Models\projet;
use App\Models\type_projet;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        //dd($projets);
        //return projet::find(1)->getParcours;
        return view('admin/projet.index', compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [];
        $data['parcours'] = parcours::all();
        $data['type_projets'] = type_projet::all();
        $data['personnels'] = personnel::all();
        return view('admin/projet.create')->with(compact('data'));
 
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
            'code'=>'required|max:255',
            'titre'=>'required|max:255',
            'resume'=>'required|max:255',
            'date_depot'=>'required',
            'fichier'=>'required|max:255',
            'semestre'=>'required',
            'parcours_id'=>'required',
            'type_projets_id'=>'required',
            'personnels_id'=>'required'

        ]);

        $data = new projet([
            'code' =>$request->get('code'),
            'titre' =>$request->get('titre'),
            'resume' =>$request->get('resume'),
            'date_depot' =>$request->get('date_depot'),
            'fichier' =>$request->get('fichier'),
            'semestre' =>$request->get('semestre'),
            'parcours_id' =>$request->get('parcours_id'),
            'type_projets_id' =>$request->get('type_projets_id'),
            'personnels_id' =>$request->get('personnels_id')
        ]);
            $data->save();
            return redirect(route('admin/projet.index'))->with('success', 'Projets ajoute avec succes');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projets = projet::findOrFail($id);
        return view('admin/projet.show', compact('projets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [];
        $data['parcours'] = parcours::all();
        $data['type_projets'] = type_projet::all();
        $data['personnels'] = personnel::all();
        $projets = projet::findOrFail($id);
        return view('admin/projet.edit', compact('projets'))->with(compact('data'));
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
            $projets =  projet::findOrFail($id);
            $projets->code =$request->get('code');
            $projets->titre =$request->get('titre');
            $projets->resume =$request->get('resume');
            $projets->date_depot =$request->get('date_depot');
            $projets->fichier =$request->get('fichier');
            $projets->semestre =$request->get('semestre');
            $projets->parcours_id =$request->get('parcours_id');
            $projets->type_projets_id =$request->get('type_projets_id');
            $projets->personnels_id =$request->get('personnels_id');
            $projets->update();
            return redirect(route('admin/projet.index'))->with('success', 'Projets modifie avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projets = projet::findOrFail($id);
        $projets->delete();

        return redirect(route('admin/projet.index'))->with('success', 'Projet est supprime avec succes');
    }
}
