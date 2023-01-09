@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de Projet</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/projet.index') }}">Back</a>
            </div>
    <table class="table table-bordered">
        <tr>
            <th>Code:</th>
            <td>{{ $projets->code }}</td>
        </tr>

        <tr>
            <th>Titre:</th>
            <td>{{ $projets->titre }}</td>
        </tr>

        <tr>
            <th>Resume:</th>
            <td>{{ $projets->resume }}</td>
        </tr>
        <tr>
            <th>Date Depot:</th>
            <td>{{ $projets->date_depot }}</td>
        </tr>

        <tr>
            <th>Fichier:</th>
            <td>{{ $projets->fichier }}</td>
        </tr>

        <tr>
            <th>Semestre:</th>
            <td>{{ $projets->semestre }}</td>
        </tr>

        <tr>
            <th>Parcours:</th>
            <td>{{ $projets->parcours_id }}</td>
        </tr>

        <tr>
            <th>Type projet:</th>
            <td>{{ $projets->type_projets_id }}</td>
        </tr>

        <tr>
            <th>Personnel:</th>
            <td>{{ $projets->personnels_id }}</td>
        </tr>

    </table>

@endsection
