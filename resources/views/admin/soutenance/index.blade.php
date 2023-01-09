@extends('admin/layout')
@section('content')

    <div class="card shadow mb-4" style="margin-right:300px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Liste des Parcours </h6>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{route('admin/soutenance.create')}}">Ajouter</a>
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
                            <th>Projets</th>
                            <th>Etudiant</th>
                            <th>Date Soutenance</th>
                            <th>Notes</th>
                            <th>Mention</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($soutenances as $so)
                            <tr>
                                <td>{{$so->id}}</td>
                                <td>{{$so->projets_id}}</td>
                                <td>{{$so->etudiants_id}}</td>
                                <td>{{$so->date_soutenance}}</td>
                                <td>{{$so->note}}</td>
                                <td>{{$so->mention}}</td>
                                <td>
                                    <form action="{{ url('admin/soutenance/'. $so->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-eye" href="{{ url('admin/soutenance/'. $so->id) }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/soutenance/'. $so->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-edit" href="{{ url('admin/soutenance/'. $so->id .'/edit') }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/soutenance/'. $so->id) }}" method="post"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash"></button>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                  <!--a href="demande.php">Nouvelle demande</a-->
             </div>
         </div>
    </div>

@endsection