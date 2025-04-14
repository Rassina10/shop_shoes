@extends('admin.admin_base')
@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h4 class="mb-0">Marques</h4></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Marques</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row mt-4">
          {{-- <div class="col-md-12"> --}}
            <div class="card mb-4">
              <div class="card-header"><h4 class="card-title">Liste des marques</h4>
                <div class="card-tools">
                    <a href="{{route('marque.create')}}" class="btn btn-outline-info float-end">
                        Nouvelle marque
                    </a>
                  </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Libellé</th>
                      <th>Genre</th>
                      <th>Image principale</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($marques as $marque)
                    <tr class="align-middle">
                      <td> {{$marque->libelle}} </td>
                      <td> {{$marque->genre==1 ? 'Femme': 'Homme' }} </td>
                      <td>
                        @if ($marque->image_principale)
                          <img src="{{asset('upload_images/'.$marque->image_principale)}}" width="50" height="50" alt="" srcset=""></td>
                        @endif
                        
                      <td class=""> <a href="{{route('marque.edit',['id'=>$marque->id])}}" class="btn btn-outline-info"> <i class="bi bi-pencil-square"></i></a>
                         <a href="" class="btn btn-outline-danger"> <i class="bi bi-trash"></i></a> 
                        </td>
                    </tr>   
                      @endforeach
                     
                    
                  </tbody>
                </table>
              </div>
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
