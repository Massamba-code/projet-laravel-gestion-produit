@extends('layout.template')
@section('container')
    <!-- Row start -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped align-middle m-0">
                            <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Tickets Resolved</th>
                                <th>Status</th>
                                <th>Country</th>
                                <th>Email Sent</th>
                                <th>Calls</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <th>
                                    <input class="form-check-input" type="checkbox" value="option1" />
                                </th>
                                <td>
                                    <img src="assets/images/user2.png" class="me-2 img-3x rounded-3"
                                         alt="Bootstrap Gallery" />
                                    Araceli Zhang
                                </td>
                                <td>info@example.com</td>
                                <td>248</td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <i class="icon-circle1 me-2 text-success fs-5"></i>
                                        Online
                                    </div>
                                </td>
                                <td>United States</td>
                                <td>98</td>
                                <td>86</td>
                                <td>
                                    <button class="btn btn-outline-primary btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-primary"
                                            data-bs-title="Edit">
                                        <i class="icon-edit"></i>
                                    </button>
                                    <button class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" data-bs-custom-class="custom-tooltip-danger"
                                            data-bs-title="Delete">
                                        <i class="icon-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row end -->
@endsection
