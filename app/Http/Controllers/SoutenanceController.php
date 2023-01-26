<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use App\Models\projet;
use Illuminate\Http\Request;
use App\Models\soutenance;
class SoutenanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd();
        $soutenances =  Soutenance::orderBy('date_soutenance', 'asc')->paginate(5);
        return view('admin/soutenance.index', compact('soutenances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $data = [];
        $data['projets'] = projet::all();
        $data['etudiants'] = etudiant::all();
        return view('admin/soutenance.create')->with(compact('data'));
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
            'projets_id'=>'required|max:255',
            'etudiants_id'=>'required|max:255',
            'date_soutenance'=>'required|max:255',
            'note'=>'required',
            'mention'=>'required|max:255',
           
        ]);

        $data = new soutenance([
            'projets_id' =>$request->get('projets_id'),
            'etudiants_id' =>$request->get('etudiants_id'),
            'date_soutenance'=>$request->get('date_soutenance'),
            'note' =>$request->get('note'),
            'mention' =>$request->get('mention')
        ]);
            $data->save();
            return redirect(route('admin/soutenance.index'))->with('success', 'Soutenance ajoute avec succes');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $soutenances = soutenance::findOrFail($id);
        return view('admin/soutenance.show', compact('soutenances'));
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
        $data['projets'] = projet::all();
        $data['etudiants'] = etudiant::all();
        $soutenances = soutenance::findOrFail($id);
        return view('admin/soutenance.edit', compact('soutenances'))->with(compact('data'));
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
        $soutenances =  soutenance::findOrFail($id);
        $soutenances->projets_id =$request->get('projets_id');
        $soutenances->etudiants_id =$request->get('etudiants_id');
        $soutenances->date_soutenance =$request->get('date_soutenance');
        $soutenances->note =$request->get('note');
        $soutenances->mention =$request->get('mention');
        $soutenances->update();
        return redirect(route('admin/soutenance.index'))->with('success', 'Soutenance modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soutenances = soutenance::findOrFail($id);
        $soutenances->delete();

        return redirect(route('admin/soutenance.index'))->with('success', 'Soutenance est supprime avec succes');
    }
}
