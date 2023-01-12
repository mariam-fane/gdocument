<?php

namespace App\Http\Controllers;
use App\Models\etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        // $search  = $request['searche']?? "";
        // if ($search !="") {
        //    $etudiants = etudiant::where('matricule', '=', $search)->get();
        // }else{
        //     $etudiants = Etudiant::all();
        // }
        // dd();
       $etudiants = etudiant::latest()->paginate(5);
        return view('admin/etudiant.index', compact('etudiants'))->with('i', (request()->input('page', 1)-1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/etudiant.create');
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
            'matricule'=>'required|max:255',
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'date_nais'=>'required',
            'lieu_nais'=>'required|max:255',
            'telephone'=>'required',
            'email'=>'required|max:255',
            'sexe'=>'required'

        ]);

        $data = new etudiant([
            'matricule' =>$request->get('matricule'),
            'nom' =>$request->get('nom'),
            'prenom' =>$request->get('prenom'),
            'date_nais' =>$request->get('date_nais'),
            'lieu_nais' =>$request->get('lieu_nais'),
            'telephone' =>$request->get('telephone'),
            'email' =>$request->get('email'),
            'sexe' =>$request->get('sexe')
        ]);
            $data->save();
            return redirect(route('admin/etudiant.index'))->with('success', 'Etudiant ajoute avec succes');
      }
    //   public function search(Request $request){
    //     $key = trim($request->get('q'));
    //     $etudiants = etudiant::query()
    //     ->where('$matricule', 'like', "%{$key}%")
    //     ->orWhere('nom', 'like', "%{$key}%")
    //     ->orderBy('created_at', 'desc')
    //     ->get();
    // }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('admin/etudiant.show', compact('etudiant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('admin/etudiant.edit', compact('etudiant'));
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
            'matricule'=>'required|max:255',
            'nom'=>'required|max:255',
            'prenom'=>'required|max:255',
            'date_nais'=>'required',
            'lieu_nais'=>'required|max:255',
            'telephone'=>'required',
            'email'=>'required|max:255',
            'sexe'=>'required'
       ]);
            $etudiant = Etudiant::findOrFail($id);
            $etudiant->matricule = $request->get('matricule');
            $etudiant->nom = $request->get('nom');
            $etudiant->prenom = $request->get('prenom');
            $etudiant->date_nais = $request->get('date_nais');
            $etudiant->lieu_nais = $request->get('lieu_nais');
            $etudiant->telephone = $request->get('telephone');
            $etudiant->email = $request->get('email');
            $etudiant->sexe = $request->get('sexe');

            $etudiant->update();

            return redirect(route('admin/etudiant.index'))->with('success', 'Etudiant modifie avec succes');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect(route('admin/etudiant.index'))->with('success', 'Etudiant est supprime avec succes');
    }
}
