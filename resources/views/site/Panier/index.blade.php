@extends('app_base')

@section('content')
    
    <!--begin::App Content-->
    <div class="app-content" style="">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row mt-4">
          {{-- <div class="col-md-12"> --}}
            <div class="card mb-4">
              <div class="card-header"><h4 class="card-title">Mes commandes</h4>
                <div class="card-tools">
                    
                  </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Article</th>
                      <th>Quantité</th>
                      <th>Montant</th>
                      <th>Etat</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($paniers as $item)
                        <tr>
                          <td> {{optional($item->article)->intitule}} </td>
                          <td> {{$item->quantite}} </td>
                          <td> {{$item->quantite * optional($item->article)->prix_unitaire}} </td>
                          <td>@includeFirst(['site.panier.etat', 'item'])</td>
                          <td>@includeFirst(['site.panier.action', 'item'])</td>
                          
                        </tr>
                    @endforeach
                  </tbody>
                </table>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
            
          {{-- </div> --}}
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection