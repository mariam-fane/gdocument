@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Modifier un projet</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/projet.update', $projets->id) }}">
                @csrf  
                @method('PUT')               
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Code:</label>
                  <input type="text" class="form-control" id="inputName5" name="code" value="{{$projets->code}}">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Titre:</label>
                  <input type="text" class="form-control" id="inputLastname" name="titre" value="{{$projets->titre}}">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Resume:</label>
                  <input type="text" class="form-control" id="inputName5" name="resume" value="{{$projets->resume}}">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Date depot:</label>
                  <input type="date" class="form-control" id="inputLastname" name="date_depot" value="{{$projets->date_depot}}">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Fichier:</label>
                  <input type="file" class="form-control" id="inputName5" name="fichier" value="{{$projets->fichier}}">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Semestre:</label>
                  <input type="text" class="form-control" id="inputLastname" name="semestre" value="{{$projets->semestre}}">
                </div>
                <label for="">Choisir votre Parcours:</label>
                <select class="form-select" aria-label="Default select example" name="parcours_id" value="{{$projets->parcours_id}}">
                    @foreach ($data['parcours'] as $p)
                    <option value="{{$p->id}}">{{$p->libelle}}</option>
                    @endforeach 
                </select>
                <label for="">Choisir Type Projet:</label>
                <select class="form-select" aria-label="Default select example" name="type_projets_id" value="{{$projets->type_projets_id}}">
                    @foreach ($data['type_projets'] as $ty)
                    <option value="{{$ty->id}}">{{$ty->designation}}</option>
                    @endforeach
                </select>
                <label for="">Choisir votre Personnel:</label>
                <select class="form-select" aria-label="Default select example" name="personnels_id" value="{{$projets->personnels}}">
                    @foreach ($data['personnels'] as $per)
                    <option value="{{$per->id}}">{{$per->nom. '  ' .$per->prenom}}</option>
                    @endforeach
                </select>
                <div class="text-center">
                  <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
        </section>
@endsection