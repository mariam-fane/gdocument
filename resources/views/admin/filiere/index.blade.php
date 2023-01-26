@extends('admin/layout')
@section('content')
<section class="section dashboard">
    <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">Filiere List </h4>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/filiere.create') }}">Ajout Filiere</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Libelle</th>
                            <th>Code</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($filieres) > 0)
                        @foreach($filieres as $filiere)
                            <tr>
                                <td>{{$filiere->id}}</td>
                                <td>{{$filiere->libele}}</td>
                                <td>{{$filiere->code}}</td>
                                <td>
                                    <form action="{{ url('admin/filiere/'. $filiere->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-eye" href="{{ url('admin/filiere/'. $filiere->id) }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/filiere/'. $filiere->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-edit" href="{{ url('admin/filiere/'. $filiere->id .'/edit') }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/filiere/'. $filiere->id) }}" method="post"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash "></button>
                                    </form>
                            </tr>
                        </tbody>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                        @endif
                    </table>
                    {!! $filieres->links() !!}
             </div>
         </div>
    </div>
</section>
@endsection