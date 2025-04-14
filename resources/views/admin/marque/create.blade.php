@extends('admin.admin_base')
@section('content')

            <div class="col">
                    <label for="text" class="form-label">Image</label>
                <div class="card">
                    <input type="file" class="form-control" name="image_principale" aria-describedby="prix-unitaire">
                </div>
            </div><div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Entrez nouvelle marque</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="POST" action="{{route('marque.store')}}" enctype="multipart/form-data" >
      @csrf 
      <!--begin::Body-->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <label for="text" class="form-label">Libellé</label>
            <input type="text" class="form-control" name="libelle" aria-label="textIntutile">
          </div>
        </div>
        <div class="col">
            <label for="text" class="form-label">Genre</label>
            <select class="form-select" name="genre" arial-label="Default select example">
              <option value="femme">Femme</option>
              <option value="homme">Homme</option>
            </select>
          </div>
        <div class="row mb-3">
        </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer">
        <div class="d-grip gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
      <!--end::Footer-->
    </form>
    <!--end::Form-->
  </div>
@endsection