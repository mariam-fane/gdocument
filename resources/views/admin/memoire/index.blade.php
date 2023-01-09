@extends('admin/layout')
@section('content')
    <div class="card shadow mb-4" style="margin-right:170px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary" style="text-align: center;">Liste des Memoires </h6>
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
                            @foreach($memoires as $memoire)
                            <tr>
                                <td>{{$memoire->id}}</td> 
                                <td>{{$memoire->type}}</td>
                                <td>{{$memoire->fichier}}</td>
                                <td>{{$memoire->specialite}}</td>
                                <td>{{$memoire->projets_id}}</td>
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
                    </table>
                  <!--a href="demande.php">Nouvelle demande</a-->
             </div>
         </div>
    </div>
    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Filtre</h6>
                                <a href="">Show All</a>
                            </div>
                            <!-- <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                    <span>Short message goes here...</span>
                                </div>
                            </div>
                        </div> -->
                    </div>
  @endsection