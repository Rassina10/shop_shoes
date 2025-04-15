@extends('admin.admin_base');

@section('content')
<div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Entrez nouveau article</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="POST" action="{{route('article.store')}}" enctype="multipart/form-data" >
      @csrf 
      <!--begin::Body-->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <label for="text" class="form-label">Intitulé</label>
            <input type="text" class="form-control" name="intitule" aria-label="textIntutile">
          </div>
          <div class="col">
            <label for="prix-unitaire" class="form-label">Prix unitaire</label>
            <input type="number" min="0" step="0.1" class="form-control" name="prix_unitaire" aria-describedby="prix-unitaire">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="text" class="form-label">Taille</label>
                <input type="number" class="form-control" name="taille" aria-label="ExampleNumber">
          </div>
          <div class="col">
            <label for="text" class="form-label">Largeur</label>
            <select class="form-select" name="largeur" arial-label="Default select example">
              <option value="1">M</option>
              <option value="2">w</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="text" class="form-label">Genre</label>
            <select class="form-select" name="genre" arial-label="Default select example">
              <option value="1">Femme</option>
              <option value="2">Homme</option>
            </select>
          </div>
          <div class="col">
            <label for="text" class="form-label">Categorie</label>
            <select class="form-select" name="categorie_id" arial-label="Default select example">
              @foreach ($categories as $categorie)
                 <option value="{{$categorie->id}}"> {{$categorie->libelle}} </option> 
                 @endforeach
                 <option value=""> Aucune </option> 
            </select>
          </div>
          <div class="col">
            <label for="text" class="form-label">Marque</label>
            <select class="form-select" name="marque_id" arial-label="Default select example">
              @foreach ($marques as $marque)
                 <option value="{{$marque->id}}"> {{$marque->libelle}} </option> 
                 @endforeach
                 <option value=""> Aucune </option> 
            </select>
          </div>
          <div class="col">
            <label for="text" class="form-label">Image</label>
            <div class="card">
              <input type="file" class="form-control" name="image_principale" aria-describedby="prix-unitaire">
             </div>
          </div>
        </div>
        <div class="mb-3">
          <div class="col">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" cols="30" rows="3"></textarea>
          </div>
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