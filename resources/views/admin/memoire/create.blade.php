@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Ajouter un Memoire</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/memoire.store') }}">
                @csrf                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Type:</label>
                  <input type="text" class="form-control" id="inputName5" name="type">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Fichier:</label>
                  <input type="file" class="form-control" id="inputLastname" name="fichier">
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Specialite:</label>
                  <input type="text" class="form-control" id="inputName5" name="specialite">
                </div>
                <label for="">Choisir votre Projet:</label>
                <select class="form-select" aria-label="Default select example" name="projets_id">
                    @foreach ($projets as $pr)
                    <option value="{{$pr->id}}">{{$pr->titre}}</option>
                    @endforeach
                </select>
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
        </section>
@endsection