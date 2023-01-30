@extends('admin/layout')
@section('content')

<section class="section dashboard">
    <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">Liste des Parcours </h4>
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
                            <th>Projet</th>
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
                        @if(count($soutenances) > 0)
                            @foreach($soutenances as $so)
                            <tr>
                                <td>{{$so->id}}</td>
                                <td>{{$so->projets->titre}}</td>
                                <td>{{$so->etudiants->nom}} {{$so->etudiants->prenom}}</td>
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
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                        @endif
                    </table>
                    {!! $soutenances->links() !!}
             </div>
         </div>
    </div>

</section>

@endsection