@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de la Type Projet</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/type_projet.index') }}">Back</a>
            </div>
    <table class="table table-bordered">
        <tr>
            <th>Designation:</th>
            <td>{{ $type_projets->designation }}</td>
        </tr>

    </table>

@endsection
