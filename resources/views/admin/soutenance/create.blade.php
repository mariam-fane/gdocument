@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Ajouter une Soutenance</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/soutenance.store') }}">
                @csrf        
                <label for="">Choisir le Projet:</label>
                <select class="form-select" aria-label="Default select example" name="projets_id">
                    @foreach ($data['projets'] as $pr)
                    <option value="{{$pr->id}}">{{$pr->titre}}</option>
                    @endforeach 
                </select>
                <label for="">Choisir l'Etudiant:</label>
                <select class="form-select" aria-label="Default select example" name="etudiants_id">
                    @foreach ($data['etudiants'] as $et)
                    <option value="{{$et->id}}">{{$et->nom. '  ' .$et->prenom}}</option>
                    @endforeach
                </select>        
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Date Soutenance:</label>
                  <input type="date" class="form-control" id="inputName5" name="date_soutenance">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Note:</label>
                  <input type="float" class="form-control" id="inputLastname" name="note">
                </div>
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Mention</label>
                  <input type="text" class="form-control" id="inputName5" name="mention">
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