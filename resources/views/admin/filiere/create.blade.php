@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un filiere</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/filiere.store') }}">
                @csrf
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Libele:</label>
                  <input type="text" class="form-control" id="inputName5" name="libele">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Code:</label>
                  <input type="text" class="form-control" id="inputName5" name="code">
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