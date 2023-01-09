@extends('admin/layout')
@section('content')

    <section class="section dashboard">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Ajouter un Type projet</h5>

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
              <form class="row g-3"  method="post" action="{{ route('admin/type_projet.store') }}">
                @csrf
                <div class="col-md-12">
                  <label for="inputName5" class="form-label">Designation:</label>
                  <input type="text" class="form-control" id="inputName5" name="designation">
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