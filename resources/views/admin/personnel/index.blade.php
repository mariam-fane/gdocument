@extends('admin/layout')
@section('content')
<section class="section dashboard">
    <div class="card">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary" style="text-align: center;">Personnel List </h4>
            </div>
            <div class="d-flex justify-content-end mb-1" style="margin-bottom:5px;">
                <a class="btn btn-primary" href="{{ route('admin/personnel.create') }}">Add Personnel</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Qualite</th>
                            <th>Lieu Affection</th>
                            <th>Sexe</th>
                            <th>Voir</th>
                            <th>Modifier</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(count($personnels) > 0)
                            @foreach($personnels as $personnel)
                                <tr>
                                    <td>{{$personnel->id}}</td>
                                    <td>{{$personnel->nom}}</td>
                                    <td>{{$personnel->prenom}}</td>
                                    <td>{{$personnel->telephone}}</td>
                                    <td>{{$personnel->email}}</td>
                                    <td>{{$personnel->qualite}}</td>
                                    <td>{{$personnel->lieuAffection}}</td>
                                    <td>{{$personnel->sexe}}</td>
                                    <td>
                                        <form action="{{ url('admin/personnel/'. $personnel->id) }}" method="post"><br>
                                            @csrf
                                            <a class="fa fa-eye" href="{{ url('admin/personnel/'. $personnel->id) }}"></a>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/personnel/'. $personnel->id) }}" method="post"><br>
                                            @csrf 
                                            <a class="fa fa-edit" href="{{ url('admin/personnel/'. $personnel->id .'/edit') }}"></a>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ url('admin/personnel/'. $personnel->id) }}" method="post"><br>
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
                    {!! $personnels->links() !!}
             </div>
         </div>
    </div>

</section>

@endsection