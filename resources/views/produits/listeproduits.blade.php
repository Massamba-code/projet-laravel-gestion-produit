@extends('layout.template')
@section('container')


    <!--FORMULAIRE D'ajout-->
    <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'ajout d'un produit </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Row start -->
                <div class="row gx-2" >
                    @if(session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger"> {{$error}}</li>
                        @endforeach
                    </ul>
                    <form action="{{ route('produits.store') }}" class="row g-3" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-header">
                                    <h5 class="card-title">Info du produit</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <div class="col-lg-3 col-sm-4 col-12">
                                        <div class="col-md-12">
                                            <label  for="cat_id" class="form-label"> Categorie</label>
                                            <select class="form-select" multiple aria-label="cat_id" name="cat_id" id="cat_id">
                                                @foreach($categories as $categorie)
                                                <option class="col-md-12" value="{{$categorie->id}}">{{$categorie->titre}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="libelle" class="form-label">libelle</label>
                                        <input type="text" class="form-control" id="libelle" name="libelle" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="description" class="form-label">description</label>
                                        <input type="text" class="form-control" id="description" name="description" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="stock" class="form-label">Stock</label>
                                        <input type="number" class="form-control" id="stock" name="stock" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="prix" class="form-label">Prix</label>
                                        <input type="number" class="form-control" id="prix" name="prix" />
                                    </div>
                                    <div class="mb-5">
                                        <label for="photo" class="form-label">Photo</label>
                                        <input class="form-control" type="file" id="photo" name="photo" />
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-success">Ajouter</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <!-- Row end -->
            </div>
        </div>
    </div>
    <!-- FIN FORMULAIRE D'AJOUT-->

    <!-- Row start -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="table-responsive">
                        @can('create-produit')
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouter"> Ajouter produit</button>
                        @endcan
                        <hr>

                        <table class="table table-bordered table-striped align-middle m-0">
                            <thead>
                            <tr>
                                <th></th>
                                <th> Photo</th>
                                <th>Libelle</th>
                                <th>Categorie</th>
                                <th>Description</th>
                                <th>Stock</th>
                                <th>Prix</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($produits as $produit)
                                <tr>
                                    <td>{{$produit->id}}</td>
                                    <th>
                                        <img src="{{asset('storage/'.$produit->photo)}}" class="me-2 img-3x rounded-3"
                                             alt="photo produit" />
                                    </th>
                                    <td>{{$produit->libelle}}</td>
                                    {{$cat=\App\Models\categorieModel::find($produit->cat_id)}}
                                    <td>{{$cat->titre}}</td>
                                    <td>{{$produit->description}}</td>
                                    <td>{{$produit->stock}}</td>
                                    <td>{{$produit->prix}}</td>



                                    <td>
                                        <form action="{{route('produits.destroy', $produit->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            @if(in_array('Super Admin',Auth::user()->getRoleNames()->toArray() ?? []))

                                                @can('edit-produit')
                                                    <a href="#update{{$produit->id}}" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                       data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                                       data-bs-title="modifer" >
                                                        <i class="icon-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-produit')
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" type="submit"
                                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                                            onclick="return confirm('voulez vous supprimer le produit?');"
                                                            data-bs-title="Delete">
                                                        <i class="icon-trash"></i>
                                                    </button>

                                                @endcan

                                            @else
                                                @if(Auth::user()->hasRole('admin')  )
                                                    @can('delete-produit')
                                                        @can('edit-produit')
                                                            <a href="#update{{$produit->id}} " class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-title="modifer" >
                                                                <i class="icon-edit"></i>
                                                            </a>
                                                        @endcan

                                                    @endcan
                                                @endif
                                            @endif
                                            @include('produits.action')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Row end -->
@endsection
