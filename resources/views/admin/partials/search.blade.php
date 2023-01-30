<form class="d-none d-md-flex ms-4" action="{{route('admin/etudiant.search') }}" method="GET">
    <input class="form-control border-0" type="text" placeholder="Search matricule ou nom" name="q"value="{{request()->q ?? '' }}">

<button class="btn btn-primary" style="margin-left: 20px;" type="submit">Search</button>
</form> 