@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;">Modifier un personnel</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/parcours.update',  $parcours->id) }}">
                @csrf
                @method('PUT')                
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Libelle:</label>
                  <input type="text" class="form-control" id="inputName5" name="libelle" value="{{$parcours->libelle}}">
                </div>
                <div class="col-md-6">
                  <label for="inputLastname" class="form-label">Code:</label>
                  <input type="text" class="form-control" id="inputLastname" name="code" value="{{$parcours->code}}">
                </div>
                <label for="">Choisir votre Filiere:</label>
                <select class="form-select" aria-label="Default select example" name="filieres_id" value="{{$parcours->filieres_id}}">
                    @foreach ($filieres as $f)
                    <option value="{{$f->id}}">{{$f->libele}}</option>
                    @endforeach
                </select>
                <!-- <div class="col-md-12">
                  <label for="inputName5" class="form-label">Code</label>
                  <input type="text" class="form-control" id="inputName5" name="matricule">
                </div> -->
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Multi Columns Form -->
            </div>
          </div>
        </section>
@endsection