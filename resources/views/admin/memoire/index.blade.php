@extends('admin/layout')
@section('content')
<section class="section dashboard">
    <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">Liste des Memoires </h4>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-right:15px;">
                <a class="btn btn-primary" href="{{route('admin/memoire.create')}}">Ajouter</a>
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
                            <th>Type</th>
                            <th>Fichiers</th>
                            <th>Specialite</th>
                            <th>Titre Projet</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($memoires) > 0)
                            @foreach($memoires as $memoire)
                            <tr> 
                                <td>{{$memoire->id}}</td> 
                                <td>{{$memoire->type}}</td>
                                <td>{{$memoire->fichier}}</td>
                                <td>{{$memoire->specialite}}</td>
                                <td>{{$memoire->projets->titre}}</td>
                                <td>
                                        <form action="{{ url('admin/memoire/'. $memoire->id) }}" method="post"><br>
                                            @csrf
                                            <a class="fa fa-eye" href="{{ url('admin/memoire/'. $memoire->id) }}"></a>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/memoire/'. $memoire->id) }}" method="post"><br>
                                            @csrf
                                            <a class="fa fa-edit" href="{{ url('admin/memoire/'. $memoire->id .'/edit') }}"></a>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/memoire/'. $memoire->id) }}" method="post"><br>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="fa fa-trash"></button>
                                        </form>
                                    </td>
                                </tr>
                            </tr>
                        </tbody>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="5" class="text-center">No Data Found</td>
                        </tr>
                        @endif
                    </table>
                    {!! $memoires->links() !!}
             </div>
         </div>
    </div>
</section>
  @endsection