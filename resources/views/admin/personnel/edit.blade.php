@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Modifier la Filiere</h5>

              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif

              <!-- Multi Columns Form -->
              <form class="row g-3"  method="post" action="{{ route('admin/personnel.update',  $personnels->id)}}">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Nom:</label>
                  <input type="text" class="form-control" id="inputName5" name="nom" value="{{$personnels->nom}}">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Prenom:</label>
                  <input type="text" class="form-control" id="inputLastname" name="prenom" value="{{$personnels->prenom}}">
                </div>
                <div class="col-md-6">
                  <label for="inputDate" class="form-label">Tel:</label>
                  <input type="text" class="form-control" id="inputtel" name="telephone" value="{{$personnels->telephone}}">
                </div>
                <div class="col-12">
                  <label for="inputLieu" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="inputLieu" name="email" value="{{$personnels->email}}">
                </div>
                <div class="col-12">
                  <label for="inputTelephone" class="form-label">Qualite:</label>
                  <input type="text" class="form-control" id="inputTelephone" name="qualite" value="{{$personnels->qualite}}">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Lieu Affection:</label>
                  <input type="text" class="form-control" id="inputEmail5" name="lieuAffection" value="{{$personnels->lieuAffection}}">
                </div>
                <div class="col-md-6">
                  <label for="inputSexe" class="form-label">Sexe:</label>
                  <input type="text" class="form-control" id="inputSexe" name="sexe" value="{{$personnels->sexe}}">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Enregistrer</button>
                  <!--button type="reset" class="btn btn-secondary">Reset</button-->
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
        </section>
@endsection