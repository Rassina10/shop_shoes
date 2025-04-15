@extends('admin.admin_base')
@section('content')
<div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Modifier une marque</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="POST" action="{{route('marque.update', ['id'=>$marque->id])}}" enctype="multipart/form-data" >
      @method('PUT')
      @csrf 
      <!--begin::Body-->
    <div class="card-body">
        <div class="row">
            <div class="col">
                <label for="text" class="form-label">Libellé</label>
                <input type="text" class="form-control" name="libelle" aria-label="textLibelle" value="{{$marque->libelle}}">
            </div>
        </div>
        <div class="col">
            <label for="text" class="form-label">Genre</label>
            <select class="form-select" name="genre" arial-label="Default select example">
              <option value="1" {{$marque->genre ==1 ?'selected' : ''}}>Femme</option>
              <option value="2" {{$marque->genre ==2 ?'selected' : ''}}>Homme</option>
            </select>
          </div>
        <div class="row mb-3">
            <div class="col">
                    <label for="text" class="form-label">Image</label>
                <div class="card">
                    <input type="file" class="form-control" name="image_principale" aria-describedby="prix-unitaire">
                </div>
            </div>
        </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer">
        <div class="d-grip gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </div>
      <!--end::Footer-->
    </form>
    <!--end::Form-->
  </div>
@endsection