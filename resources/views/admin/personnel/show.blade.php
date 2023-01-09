@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de personnel</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/personnel.index') }}">Back</a>
            </div>
    <table class="table table-bordered">

        <tr>
            <th>Nom:</th>
            <td>{{ $personnels->nom }}</td>
        </tr>

        <tr>
            <th>Prenom:</th>
            <td>{{ $personnels->prenom }}</td>
        </tr>

        <tr>
            <th>Tel:</th>
            <td>{{ $personnels->telephone }}</td>
        </tr>

        <tr>
            <th>Email:</th>
            <td>{{ $personnels->email }}</td>
        </tr>

        <tr>
            <th>Qualite:</th>
            <td>{{ $personnels->qualite }}</td>
        </tr>

        <tr>
            <th>Lieu Affection:</th>
            <td>{{ $personnels->lieuAffection }}</td>
        </tr>

        <tr>
            <th>Sexe:</th>
            <td>{{ $personnels->sexe }}</td>
        </tr>

    </table>

@endsection
