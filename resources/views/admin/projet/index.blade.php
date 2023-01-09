@extends('admin/layout')
@section('content')

    <div class="card shadow mb-4" style="margin-right:170px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Projet List </h6>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/projet.create') }}">Add Projet</a>
            </div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Code</th>
                            <th>Titre</th>
                            <th>Resume</th>
                            <th>Date Depot</th>
                            <th>Fichier</th>
                            <th>Semestre</th>
                            <th>Parcours</th>
                            <th>Type</th>
                            <th>Personnel</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($projets as $p)
                            <tr>
                                <td>{{$p->id}}</td>
                                <td>{{$p->code}}</td>
                                <td>{{$p->titre}}</td>
                                <td>{{$p->resume}}</td>
                                <td>{{$p->date_depot}}</td>
                                <td>{{$p->ficier}}</td>
                                <td>{{$p->semestre}}</td>
                                <td>{{$p->parcours_id}}</td>
                                <td>{{$p->type_projets_id}}</td>
                                <td>{{$p->personnels_id}}</td>
                                <td>
                                    <form action="{{ url('admin/projet/'. $p->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-eye" href="{{ url('admin/projet/'. $p->id) }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/projet/'. $p->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-edit" href="{{ url('admin/projet/'. $p->id .'/edit') }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/projet/'. $p->id) }}" method="post"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash"></button>
                                    </form>
                                </td>
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