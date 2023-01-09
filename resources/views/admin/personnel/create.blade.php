@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un personnel</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/personnel.store') }}">
                @csrf                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Nom:</label>
                  <input type="text" class="form-control" id="inputName5" name="nom">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Prenom:</label>
                  <input type="text" class="form-control" id="inputLastname" name="prenom">
                </div>
                <div class="col-md-12">
                  <label for="inputDate" class="form-label">Tel:</label>
                  <input type="text" class="form-control" id="inputDate" name="telephone">
                </div>
                <div class="col-12">
                  <label for="inputLieu" class="form-label">Email:</label>
                  <input type="email" class="form-control" id="inputLieu" name="email">
                </div>
                <div class="col-12">
                  <label for="inputTelephone" class="form-label">Qualite:</label>
                  <input type="text" class="form-control" id="inputTelephone" name="qualite">
                </div>
                <div class="col-md-6">
                  <label for="inputEmail5" class="form-label">Lieu Affection:</label>
                  <input type="text" class="form-control" id="inputEmail5" name="lieuAffection">
                </div>
                <div class="col-md-6">
                  <label for="inputSexe" class="form-label">Sexe:</label>
                  <input type="text" class="form-control" id="inputSexe" name="sexe">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
        </section>
@endsection