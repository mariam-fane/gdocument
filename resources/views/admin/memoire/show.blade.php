@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information du memoire</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/memoire.index') }}">Back</a>
            </div>
    <table class="table table-bordered">

        <tr>
            <th>Type:</th>
            <td>{{ $memoires->type }}</td>
        </tr>

        <tr>
            <th>Fichier:</th>
            <td>{{ $memoires->fichier }}</td>
        </tr>

        <tr>
            <th>Specialite:</th>
            <td>{{ $memoires->specialite }}</td>
        </tr>

        <tr>
            <th>Projet:</th>
            <td>{{ $memoires->projets_id }}</td>
        </tr>

    </table>

@endsection
