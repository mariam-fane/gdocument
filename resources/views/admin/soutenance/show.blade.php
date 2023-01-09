@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de personnel</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/soutenance.index') }}">Back</a>
            </div>
    <table class="table table-bordered">

        <tr>
            <th>Projet:</th>
            <td>{{ $soutenances->projets_id }}</td>
        </tr>

        <tr>
            <th>Etudiant:</th>
            <td>{{ $soutenances->etudiants_id }}</td>
        </tr>

        <tr>
            <th>Date soutenance:</th>
            <td>{{ $soutenances->date_soutenance }}</td>
        </tr>

        <tr>
            <th>Note:</th>
            <td>{{ $soutenances->note }}</td>
        </tr>

        <tr>
            <th>Mention:</th>
            <td>{{ $soutenances->mention }}</td>
        </tr>
    </table>

@endsection
