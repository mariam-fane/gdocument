@extends('admin/layout')
@section('content')
<section class="section dashboard">
    <div class="card">
                    <div class="card-header py-3">
                        <h4 class="m-0 font-weight-bold text-primary">Projet List </h4>
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
                                @if(count($projets) > 0)
                                @foreach($projets as $p)
                                    <tr>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p->code}}</td>
                                        <td>{{$p->titre}}</td>
                                        <td>{{$p->resume}}</td>
                                        <td>{{$p->date_depot}}</td>
                                        <td>{{$p->ficier}}</td>
                                        <td>{{$p->semestre}}</td>
                                        <td>{{$p->parcours->libelle}}</td>
                                        <td>{{$p->type_projets->titre}}</td>
                                        <td>{{$p->personnels->nom}} {{$p->personnels->prenom}}</td>
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
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">No Data Found</td>
                                </tr>
                                @endif
                            {!! $projets->links() !!}
                            </table>
                        <!--a href="demande.php">Nouvelle demande</a-->
                    </div>
                </div>
    </div>
</section>
@endsection