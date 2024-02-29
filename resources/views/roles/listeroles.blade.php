@extends('layout.template')
@section('container')


    <!--FORMULAIRE D'ajout-->
    <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'ajout d'un role</h5>
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
                    <form action="{{ route('roles.store') }}" class="row g-3" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="card mb-12">
                                <div class="card-header">
                                    <h5 class="card-title">Info du role</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Row start -->
                                    <div class="col-md-6">
                                        <label for="titre" class="form-label">Titre</label>
                                        <input type="text" class="form-control" id="titre" name="titre" />
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
                        @if (Auth::user()->hasRole('Super Admin'))
                        @can('create-role')
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouter"> Ajouter role</button>
                        @endcan
                        @endif
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
                                <th>titre</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{$role->id}}</td>
                                    <th>
                                        <input class="form-check-input" type="checkbox" value="option1" />
                                    </th>
                                    <td>{{$role->name}}</td>



                                    <td>
                                        <form action="{{route('roles.destroy', $role->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                                @can('edit-role')
                                                    <a href="{{ route('roles.edit',$role->id) }} " class="btn btn-outline-primary btn-sm" data-bs-title="modifer" >
                                                        <i class="icon-edit"></i>
                                                    </a>
                                                @endcan

                                                @can('delete-role')
                                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" type="submit"
                                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                                            onclick="return confirm('voulez vous supprimer le role?');"
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
