@extends('layout.template')
@section('container')


    <!--FORMULAIRE D'ajout-->
    <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'ajout d'un commande </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Row start -->
                <div class="row gx-2" >

                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="alert alert-danger"> {{$error}}</li>
                        @endforeach
                    </ul>
                    <form action="{{ route('commandes.store') }}" class="row g-3" method="post"  id="commandeForm">
                        @csrf
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-header">
                                    <h5 class="card-title">Info du commande</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <!-- selection client -->
                                    <label for="date_commande"> Date commande</label>
                                    <input type="date" class="form-control date_commande" name="date_commande" id="date_commande" value="{{date('Y-m-d')}}">
                                    <fieldset>
                                        <legend class="bg-success">Informations sur le client</legend>
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="mb-3">
                                                    <label for="client" class="form-label">Client:</label>
                                                    <br>
                                                    <br>
                                                    <select id="client_id" name="client_id" class="form-select client">
                                                        <option value="" selected disabled>Sélectionnez le client</option>
                                                        @foreach ($clients as $client)
                                                            <option value="{{ $client->id }}"  >{{ $client->prenom }} {{ $client->nom }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>


                                    <!-- Section des produits -->
                                    <div id="produitsSection">
                                        <!-- Initial field for product -->
                                        <div class="produit-field mb-3">
                                            <label for="produit">Produit :</label>
                                            <select class="form-select produit" name="produits[][id]">
                                                @foreach ($produits as $produit)
                                                    <option value="{{ $produit->id }}" data-prix="{{ $produit->prix }}">{{ $produit->libelle }}</option>
                                                @endforeach
                                            </select>
                                            <label for="quantite">Quantité :</label>
                                            <input type="number" class="form-control quantite" name="quantite[]" min="1">
                                            <label for="prixUnitaire">Prix unitaire :</label>
                                            <input type="text" class="form-control prixUnitaire" name="prix[]" readonly>
                                        </div>
                                    </div>

                                    <!-- Bouton pour ajouter un produit -->
                                    <button type="button" class="btn btn-success" id="addProduitBtn">Ajouter Produit</button>
                                    <br>
                                    <br>

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
                        @can('create-commande')
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouter"> Ajouter commande</button>
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
                            <tr>
                            @foreach($commandes as $commande)
                                @foreach($commande->produits as $produit)

                                        <td>{{$commande->id}}</td>
                                        <th>
                                            <img src="{{asset('storage/'.$produit->photo)}}" class="me-2 img-3x rounded-3" alt="photo commande" />
                                        </th>
                                        <td>{{$produit->libelle}}</td>
                                        <td>{{$produit->categories->titre}}</td>
                                        <td>{{$produit->description}}</td>
                                        <td>{{$produit->stock}}</td>
                                        <td>{{$produit->prix}}</td>
                                        <!-- Autres colonnes et actions -->

                                @endforeach

                                    <td>
                                        <form action="{{route('commandes.destroy', $commande->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            @if(in_array('Super Admin',Auth::user()->getRoleNames()->toArray() ?? []))

                                                @can('edit-commande')
                                                    <a href="#update{{$commande->id}}" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                       data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                                       data-bs-title="modifer" >
                                                        <i class="icon-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('delete-commande')
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" type="submit"
                                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                                            onclick="return confirm('voulez vous supprimer le commande?');"
                                                            data-bs-title="Delete">
                                                        <i class="icon-trash"></i>
                                                    </button>

                                                @endcan

                                            @else
                                                @if(Auth::user()->hasRole('admin')  )
                                                    @can('delete-commande')
                                                        @can('edit-commande')
                                                            <a href="#update{{$commande->id}} " class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-title="modifer" >
                                                                <i class="icon-edit"></i>
                                                            </a>
                                                        @endcan

                                                    @endcan
                                                @endif
                                            @endif
                                            @include('commandes.action')
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const produitsSection = document.getElementById('produitsSection');
            const addProduitBtn = document.getElementById('addProduitBtn');

            addProduitBtn.addEventListener('click', function() {
                const produitField = document.createElement('div');
                produitField.classList.add('produit-field', 'mb-3');
                produitField.innerHTML = `
                <label for="produit">Produit :</label>
                <select class="form-select produit" name="produits[][id]">
                    @foreach ($produits as $produit)
                <option value="{{ $produit->id }}" data-prix="{{ $produit->prix }}">{{ $produit->libelle }}</option>
                    @endforeach
                </select>
                <label for="quantite">Quantité :</label>
                <input type="number" class="form-control quantite" name="quantite[]" min="1">
                <label for="prixUnitaire">Prix unitaire :</label>
                <input type="text" class="form-control prixUnitaire" name="prix[]" readonly>
            `;
                produitsSection.appendChild(produitField);
            });

            // Mettre à jour le prix unitaire lors de la sélection d'un produit
            produitsSection.addEventListener('change', function(event) {
                const selectedProduit = event.target;
                if (selectedProduit.classList.contains('produit')) {
                    const prixUnitaireField = selectedProduit.parentElement.querySelector('.prixUnitaire');
                    const selectedOption = selectedProduit.options[selectedProduit.selectedIndex];
                    prixUnitaireField.value = selectedOption.getAttribute('data-prix');
                }
            });
        });
    </script>


@endsection




