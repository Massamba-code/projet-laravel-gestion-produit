<!--FORMULAIRE D'ajout-->
<div class="modal fade" id="update{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Formulaire de modification d'un utilisateur </h5>
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
                <form action="{{ route('users.update', $user->id) }}" class="row g-3" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("PUT")

                    <div class="col-md-6">
                        <div class="card mb-2">
                            <div class="card-header">
                                <h5 class="card-title">Info personnel</h5>
                            </div>
                            <div class="card-body">
                                <!-- Row start -->
                                <div class="col-md-12">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="{{$user->nom}}"/>
                                </div>
                                <div class="col-md-12">
                                    <label for="prenom" class="form-label">Prenom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" value="{{$user->prenom}}"/>
                                </div>

                                <div class="mb-5">
                                    <label for="photo" class="form-label">Photo</label>
                                    <input class="form-control" type="file" id="photo" name="photo" value="{{$user->photo}}"/>
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
                                    <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}"/>
                                </div>
                                <div class="col-md-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" value="{{$user->password}}" />
                                </div>
                                <div class="col-md-12">
                                    <div class="col-12">
                                        <label  for="role" class="form-label"> role</label>
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
                        <button type="submit" class="btn btn-success">Modifier</button>
                    </div>
                </form>
            </div>
            <!-- Row end -->
        </div>
    </div>
</div>
<!-- FIN FORMULAIRE D'AJOUT-->
