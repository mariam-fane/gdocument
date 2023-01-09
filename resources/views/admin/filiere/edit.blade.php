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
              <form class="row g-3"  method="post" action="{{ route('admin/filiere.update',  $filieres->id) }}">
                @csrf
                @method('PUT')
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Libele:</label>
                  <input type="text" class="form-control" id="inputName5" name="libele" value="{{$filieres->libele}}">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Code:</label>
                  <input type="text" class="form-control" id="inputName5" name="code" value="{{$filieres->code}}">
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