@extends('admin.admin_base')
@section('content')
<div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Modifier une commande</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="POST" action="{{route('panier.update', ['id'=>$panier->id])}}" enctype="multipart/form-data" >
      @method('PUT')
      @csrf 
      <!--begin::Body-->
      <div class="card-body">
        <div class="row">
          <div class="col">
            <label for="Montant" class="form-label">Montant</label>
            <input type="number" min="0" step="0.1" class="form-control" name="Montant" aria-describedby="Montant" value="{{$panier->Montant}}">
          </div>
        </div>
      <!--end::Body-->
      <!--begin::Footer-->
      <div class="card-footer">
        <div class="d-grip gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-primary">Valider</button>
        </div>
      </div>
      <div class="card-footer">
        <div class="d-grip gap-2 d-md-right justify-content-md-end">
          <button type="submit" class="btn btn-primary">Annuler</button>
        </div>
      </div>
      <!--end::Footer-->
    </form>
    <!--end::Form-->
  </div>
@endsection