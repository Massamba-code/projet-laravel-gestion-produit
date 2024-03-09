@extends('layouts.app')

@section('container')
    <div class="row">
        <div class="col-12">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="border rounded-3">
                        <div class="table-responsive">
                            <a class="btn btn-primary" href="{{route('commandes.index')}}"> Acceuil commande</a>

                            <table class="table align-middle custom-table m-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>clients</th>
                                    <th>Numero client</th>
                                    <th>Adresse</th>
                                    <th>total</th>
                                    <th>Date Commande</th>
                                    <th>actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($commandes as $commande)
                                    @if($commande->status=='en attente')

                                <tr>
                                    @foreach($commande->produits as $produit)
                                    <td>{{$commande->id}}</td>
                                    <td>
                                        <div class="fw-semibold">{{$commande->clients->prenom}} {{$commande->clients->nom}}</div>
                                    </td>
                                        <td>
                                            <span class="badge bg-info">{{$commande->clients->numero}}</span>
                                        </td>
                                    <td>{{$commande->clients->adresse}}</td>

                                    <td>
                                        <span class="badge border border-info text-info">{{$produit->pivot->total}}</span>
                                    </td>
                                    @endforeach
                                    <td>
                                        <div class="bg-info p-2 rounded-2">
                                            {{ date('Y-m-d', $commande->create_at) }}
                                        </div>

                                    </td>
                                    <td>
                                        @can('edit-commande')
                                            <a href="/update_commande/{{$commande->id}}" class="btn btn-outline-primary btn-sm"
                                               data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                               data-bs-title="modifer" >
                                                <i class="fs-3 icon-edit"> valider</i>
                                            </a>
                                        @endcan
                                    </td>
                                </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
