<!--FORMULAIRE D'ajout-->
<div class="modal fade" id="update{{$produit->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">modifier le produit </h5>
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
                <form action="{{ route('produits.update',$produit->id) }}" class="row g-3" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

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
                                    <input type="text" class="form-control" id="libelle" name="libelle" value="{{$produit->libelle}}"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="description" class="form-label">description</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{$produit->description}}"/>
                                </div>
                                <div class="col-md-6">
                                    <label for="stock" class="form-label">Stock</label>
                                    <input type="number" class="form-control" id="stock" name="stock" value="{{$produit->stock}}" />
                                </div>
                                <div class="col-md-6">
                                    <label for="prix" class="form-label">Prix</label>
                                    <input type="number" class="form-control" id="prix" name="prix" value="{{$produit->prix}}" />
                                </div>
                                <div class="mb-5">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input class="form-control" type="file" id="photo" name="photo" value="{{$produit->photo}}" />
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">Modifier</button>
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
