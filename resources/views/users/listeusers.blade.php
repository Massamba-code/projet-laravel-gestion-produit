@extends('layout.template')
@section('container')



    <!--FORMULAIRE D'ajout-->
    <div class="modal fade" id="ajouter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'ajout d'un utilisateur </h5>
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
                    <form action="{{ route('users.store') }}" class="row g-3" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                        <div class="card mb-2">
                            <div class="card-header">
                                <h5 class="card-title">Info personnel</h5>
                            </div>
                            <div class="card-body">
                                <!-- Row start -->
                                    <div class="col-md-12">
                                        <label for="nom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="nom" name="nom" />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="prenom" class="form-label">Prenom</label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" />
                                    </div>

                                <div class="mb-5">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input class="form-control" type="file" id="photo" name="photo" />
                                </div>
                                <!-- Row end -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card mb-2">
                            <div class="card-header">
                                <h5 class="card-title">info de connection</h5>
                            </div>
                            <div class="card-body">
                                <!-- Row start -->
                                    <div class="col-md-12">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" />
                                    </div>
                                <div class="col-md-12">
                                    <div class="col-12">
                                        <label  for="role" class="form-label"> profil</label>
                                        <select class="form-select" multiple aria-label="Roles" id="roles" name="roles[]">
                                            @forelse ($roles as $role)


                                                @if ($role!='Super Admin')
                                                    <option value="{{ $role->name }}" {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                        {{ $role->name }}
                                                    </option>
                                                @else
                                                    @if (Auth::user()->hasRole('Super Admin'))
                                                        <option value="{{ $role->name }}" {{ in_array($role, old('roles') ?? []) ? 'selected' : '' }}>
                                                            {{ $role->name }}
                                                        </option>
                                                    @endif
                                                @endif

                                            @empty

                                            @endforelse
                                        </select>
                                    </div>
                                </div>

                                <!-- Row end -->
                            </div>
                        </div>
                    </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success">Ajouter</button>
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
                        @can('create-user')
                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ajouter"> Ajouter un Utilisateur</button>
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

                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <th>
                                    <input class="form-check-input" type="checkbox" value="option1" />
                                </th>
                                <td>
                                    <img src="{{asset('storage/'.$user->photo)}}" class="me-2 img-3x rounded-3"
                                         alt="Bootstrap Gallery" />
                                    {{$user->prenom}} {{$user->nom}}
                                </td>
                                <td>{{$user->email}}</td>



                                <td>
                                    <form action="{{route('users.destroy',$user->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        @if(in_array('Super Admin',$user->getRoleNames()->toArray() ?? []))
                                            @if(Auth::user()->hasRole('admin'))
                                    <!--<a href="/update_etudiant/" class="btn btn-info"></a>-->
                                    @can('edit-user')
                                                    <a href="#update{{$user->id}}" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-primary"
                                            data-bs-title="modifer" >
                                        <i class="icon-edit"></i>
                                                    </a>
                                    @endcan
                                            @endif
                                        @else
                                            @can('edit-user')
                                            <a href="#update{{$user->id}}" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal"
                                                    data-bs-placement="top" data-bs-custom-class="custom-tooltip-primary"
                                                    data-bs-title="modifer" >
                                                <i class="icon-edit"></i>
                                            </a>

                                            @endcan


                                    @can('delete-user')
                                        @if (Auth::user()->id!=$user->id)
                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" type="submit"
                                            onclick="return confirm('vooulez vous supprimer cet utilisateur')"
                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                            data-bs-title="Delete">
                                        <i class="icon-trash"></i>
                                    </button>
                                        @endif
                                    @endcan
                                        @endif
                                        @include('users.action')
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
