@extends('admin.admin_base')
@section()
<div class="card card-primary card-outline mb-4">
    <!--begin::Header-->
    <div class="card-header"><div class="card-title">Panier</div></div>
    <!--end::Header-->
    <!--begin::Form-->
    <form method="POST" action="{{route('panier.store')}}" enctype="multipart/form-data" >
      @csrf 
      <!--begin::Body-->
      <div class="card-body">
      <div class="col">
        <label class="form-label">Quantité</label>
        <input type="number" min="0" step="0.1" class="form-control" name="quantite" aria-describedby="quantite">
    </div>
        <div class="col">
            <label class="form-label">Montant</label>
            <input type="number" min="0" step="0.1" class="form-control" name="montant" aria-describedby="montant">
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