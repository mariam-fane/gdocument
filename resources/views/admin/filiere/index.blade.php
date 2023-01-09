@extends('admin/layout')
@section('content')

    <div class="card shadow mb-4" style="margin: right 200px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Filiere List </h6>
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
                        @foreach($filieres as $filiere)
                            <tr>
                                <td>{{$filiere->id}}</td>
                                <td>{{$filiere->libele}}</td>
                                <td>{{$filiere->code}}</td>
                                <td>
                                    <form action="{{ url('admin/filiere/'. $filiere->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-eye" href="{{ url('admin/filiere/'. $filiere->id) }}">Voir</a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/filiere/'. $filiere->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-edit" href="{{ url('admin/filiere/'. $filiere->id .'/edit') }}">Modifier</a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/filiere/'. $filiere->id) }}" method="post"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash ">Supprimer</button>
                                    </form>
                            </tr>
                        </tbody>
                        @endforeach
                        </tbody>
                    </table>
                  <!--a href="demande.php">Nouvelle demande</a-->
             </div>
         </div>
    </div>

@endsection