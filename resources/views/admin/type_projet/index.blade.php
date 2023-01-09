@extends('admin/layout')
@section('content')

    <div class="card shadow mb-4" style="margin: right 200px;">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Type Projet List </h6>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/type_projet.create') }}">Ajouter</a>
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
                            <th>Designation</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($type_projets as $type_projet)
                            <tr>
                                <td>{{$type_projet->id}}</td>
                                <td>{{$type_projet->designation}}</td>
                                <td>
                                    <form action="{{ url('admin/type_projet/'. $type_projet->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-eye" href="{{ url('admin/type_projet/'. $type_projet->id) }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('tadmin/ype_projet/'. $type_projet->id) }}" method="post"><br>
                                        @csrf
                                        <a class="fa fa-edit" href="{{ url('admin/type_projet/'. $type_projet->id .'/edit') }}"></a>
                                    </form>
                                </td>
                                <td>
                                    <form action="{{ url('admin/type_projet/'. $type_projet->id) }}" method="post"><br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="fa fa-trash"></button>
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