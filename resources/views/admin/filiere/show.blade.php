@extends('admin/layout')
@section('content')

    <h1 class="card-title" style="text-align: center;">Information de la Filiere</h1>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/filiere.index') }}">Back</a>
            </div>
    <table class="table table-bordered">
        <tr>
            <th>Libele:</th>
            <td>{{ $filieres->libele }}</td>
        </tr>

        <tr>
            <th>Code:</th>
            <td>{{ $filieres->code }}</td>
        </tr>
    </table>

@endsection
