@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de l'etudiant</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/etudiant.index') }}">Back</a>
            </div>
    <table class="table table-bordered">
        <tr>
            <th>Matricule:</th>
            <td>{{ $etudiant->matricule }}</td>
        </tr>

        <tr>
            <th>Nom:</th>
            <td>{{ $etudiant->nom }}</td>
        </tr>

        <tr>
            <th>Prenom:</th>
            <td>{{ $etudiant->prenom }}</td>
        </tr>
        <tr>
            <th>Date Naissance:</th>
            <td>{{ $etudiant->date_nais }}</td>
        </tr>

        <tr>
            <th>Lieu Naissance:</th>
            <td>{{ $etudiant->lieu_nais }}</td>
        </tr>

        <tr>
            <th>Telephone:</th>
            <td>{{ $etudiant->telephone }}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{ $etudiant->email }}</td>
        </tr>

        <tr>
            <th>Sexe:</th>
            <td>{{ $etudiant->sexe }}</td>
        </tr>

    </table>

@endsection
