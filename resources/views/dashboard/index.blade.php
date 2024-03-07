@extends('layout.template')
@section('container')
    <div class="col-xl-6 col-12">
        <div class="row gx-2">
            <div class="col-sm-4 col-6">
                <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape3.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-book-open"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">{{$countClients}}</h3>
                        <h6 class="m-0 fw-light text-light">nombre de clients</h6>
                    </div>

                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-check-circle"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">{{$countMaleClients}}</h3>
                        <h6 class="m-0 fw-light text-light">Clients Masculin</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-6">
                <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape6.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-access_time"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">{{$countfemClients}}</h3>
                        <h6 class="m-0 fw-light text-light">Clients Féminins</h6>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-6">
                <div class="card px-3 py-2 mb-2 d-flex flex-row align-items-center">
                    <div class="position-relative shape-block">
                        <img src="assets/images/shape5.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
                        <i class="icon-alert-triangle"></i>
                    </div>
                    <div class="ms-2">
                        <h3 class="m-0 fw-semibold">{{$countprod}}</h3>
                        <h6 class="m-0 fw-light text-light">Nombre de Produits</h6>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card mb-2">
                    <div class="card-header">
                        <h5 class="card-title">Avg. Response Time</h5>
                    </div>
                    <div class="card-body">
                        <div id="avgTimeData"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
