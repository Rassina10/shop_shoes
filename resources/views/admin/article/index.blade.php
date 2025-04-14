@extends('admin.admin_base')

@section('content')
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h4 class="mb-0">Articles</h4></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Articles</li>
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
              <div class="card-header"><h4 class="card-title">Liste des articles</h4>
                <div class="card-tools">
                    <a href="{{route('article.create')}}" class="btn btn-outline-info float-end">
                        Nouveau article
                    </a>
                  </div>
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Intitulé</th>
                      <th>Prix-unitaire</th>
                      <th>Genre</th>
                      <th>Largeur</th>
                      <th>Taille</th>
                      <th>Image principale</th>
                      <th>Categorie</th>
                      <th>Marque</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($articles as $article)
                    <tr class="align-middle">
                      <td> {{$article->intitule}} </td>
                      <td> {{$article->prix_unitaire}} </td>
                      <td> {{$article->genre==1 ? 'Femme' : 'Homme'}} </td>
                      <td> {{$article->largeur==1 ? 'M' : 'W'}} </td>
                      <td> {{$article->taille}} </td>
                      <td>
                        @if ($article->image_principale)
                          <img src="{{asset('upload_images/'.$article->image_principale)}}" width="50" height="50" alt="" srcset="">
                        @endif
                      </td>
                      <td> 
                        @if ($article->categorie)
                          
                        {{$article->categorie->libelle}}
                        @else
                        pas de categorie
                        @endif
                        <td> 
                          @if ($article->marque)
                            
                          {{$article->marque->libelle}}
                          @else
                          pas de marque
                          @endif
                      </td>
                      <td class=""> <a href="{{route('article.edit',['id'=>$article->id])}}" class="btn btn-outline-info"> 
                        <i class="bi bi-pencil-square"></i></a> <a href="" class="btn btn-outline-danger"> <i class="bi bi-trash"></i></a> </td>
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