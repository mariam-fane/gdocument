@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de parcours</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/parcours.index') }}">Back</a>
            </div>
    <table class="table table-bordered">

        <tr>
            <th>Libelle:</th>
            <td>{{$parcours->libelle }}</td>
        </tr>

        <tr>
            <th>Code:</th>
            <td>{{$parcours->code }}</td>
        </tr>

        <tr>
            <th>Filiere:</th>
            <td>{{$parcours->filieres_id }}</td>
        </tr>
    </table>

@endsection
