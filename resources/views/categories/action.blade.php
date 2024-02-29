<!--FORMULAIRE D'ajout-->
<div class="modal fade" id="update{{$categorie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier la categorie  </h5>
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
                <form action="{{ route('categories.update', $categorie->id) }}" class="row g-3" method="post" >
                    @csrf
                    @method("PUT")
                    <div class="col-md-12">
                        <div class="card mb-12">
                            <div class="card-header">
                                <h5 class="card-title">Info du categorie</h5>
                            </div>
                            <div class="card-body">
                                <!-- Row start -->
                                <div class="col-md-6">
                                    <label for="titre" class="form-label">Titre</label>
                                    <input type="text" class="form-control" id="titre" name="titre" value="{{$categorie->titre}}" />
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-success">modifier</button>
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
