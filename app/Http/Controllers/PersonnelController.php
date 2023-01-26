<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personnel;
class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personnels = Personnel::orderBy('nom', 'asc')->paginate(5);
        return view('admin/personnel.index', compact('personnels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/personnel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new personnel([
            'nom' =>$request->get('nom'),
            'prenom' =>$request->get('prenom'),
            'telephone' =>$request->get('telephone'),
            'email' =>$request->get('email'),
            'qualite' =>$request->get('qualite'),
            'lieuAffection' =>$request->get('lieuAffection'),
            'sexe' =>$request->get('sexe')
        ]);
            $data->save();
            return redirect(route('admin/personnel.index'))->with('success', 'Personnel ajoute avec succes');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personnels = personnel::findOrFail($id);
        return view('admin/personnel.show', compact('personnels'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personnels = personnel::findOrFail($id);
        return view('admin/personnel.edit', compact('personnels'));
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
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'telephone'=>'required',
            'email'=>'required|max:255',
            'qualite'=>'required',
            'lieuAffection'=>'required|max:255',
            'sexe'=>'required'

        ]);
            $personnel = personnel::findOrFail($id);
            $personnel-> nom = $request->get('nom');
            $personnel-> prenom = $request->get('prenom');
            $personnel-> telephone = $request->get('telephone');
            $personnel-> email = $request->get('email');
            $personnel-> qualite = $request->get('qualite');
            $personnel-> lieuAffection = $request->get('lieuAffection');
            $personnel-> sexe = $request->get('sexe');
            $personnel->update();

        return redirect(route('admin/personnel.index'))->with('success', 'Personnel ajoute avec succes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $personnel = personnel::findOrFail($id);
        $personnel->delete();

        return redirect(route('admin/personnel.index'))->with('success', 'Personnel supprime avec succes');
    }
}
 