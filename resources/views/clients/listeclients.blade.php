@extends('layout.template')
@section('container')




    <!--FORMULAIRE D'ajout-->
    <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'ajout d'un client </h5>
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
                    <form action="{{ route('clients.store') }}" class="row g-3" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-header">
                                    <h5 class="card-title">Info du Client</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <div class="col-md-6">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" />
                                    </div>
                                    <div class="col-md-6">
                                        <label for="prenom" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" />
                                    </div>
                                    <div class="col-12">
                                        <label for="adresse" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="1234 Main St" />
                                    </div>
                                    <div class="col-12">
                                        <label for="numero" class="form-label">Numero</label>
                                        <input type="text" class="form-control" id="numero" name="numero" placeholder="saisir le numero de telephone" />
                                    </div>

                                    <div class="col-lg-3 col-sm-4 col-12">
                                        <div class="mb-3">
                                            <label  for="sexe" class="form-label"> profil</label>
                                            <select class="form-select" name="sexe" id="sexe">
                                                <option value="M">M</option>
                                                <option value="F">F</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Row end -->
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
                        @can('create-client')
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouter"> Ajouter Client</button>
                        @endcan
                        <hr>
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-bordered table-striped align-middle m-0">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>profil</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{$client->id}}</td>
                                    <th>
                                        <input class="form-check-input" type="checkbox" value="option1" />
                                    </th>
                                    <td>

                                        {{$client->prenom}} {{$client->nom}}
                                    </td>
                                    <td>{{$client->adresse}}</td>
                                    <td>{{$client->numero}}</td>


                                    <td>
                                        <form action="{{route('clients.destroy', $client->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        <!--<a href="/update_etudiant/" class="btn btn-info"></a>-->
                                        @can('edit-client')
                                            <a href="{{ route('clients.edit',$client->id) }} " class="btn btn-outline-primary btn-sm" data-bs-title="modifer" >
                                                <i class="icon-edit"></i>
                                            </a>
                                        @endcan

                                        @can('delete-client')
                                                <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" type="submit"
                                                        data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                                        onclick="return confirm('voulez vous supprimer le client?');"
                                                        data-bs-title="Delete">
                                                    <i class="icon-trash"></i>
                                                </button>
                                        @endcan
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
