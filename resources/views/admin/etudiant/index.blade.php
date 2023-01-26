@extends('admin/layout')
@section('content')
<section class="section dashboard">
    <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">Etudiant List </h4>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-right:15px;">
                <a class="btn btn-primary" href="{{ route('admin/etudiant.create') }}">Ajouter</a>
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
                            <th>Matricule</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Date Naissance</th>
                            <th>Lieu Naissance</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Sexe</th>
                            <th>Show</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($etudiants) > 0)
                            @foreach($etudiants as $etudiant)
                            <tr>
                                <td>{{$etudiant->id}}</td>
                                <td>{{$etudiant->matricule}}</td>
                                <td>{{$etudiant->nom}}</td>
                                <td>{{$etudiant->prenom}}</td>
                                <td>{{$etudiant->date_nais}}</td>
                                <td>{{$etudiant->lieu_nais}}</td>
                                <td>{{$etudiant->telephone}}</td>
                                <td>{{$etudiant->email}}</td>
                                <td>{{$etudiant->sexe}}</td>
                                <td>
                                    <form action="{{ url('admin/etudiant/'. $etudiant->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-eye" href="{{ url('admin/etudiant/'. $etudiant->id) }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/etudiant/'. $etudiant->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-edit" href="{{ url('admin/etudiant/'. $etudiant->id .'/edit') }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/etudiant/'. $etudiant->id) }}" method="post"><br>
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
                    {!! $etudiants->links() !!}

             </div>
         </div>
    </div>
</section>
@endsection