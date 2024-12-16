@extends('layouts.app-dash')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-3 mb-md-4">
            <div class="card-header">
                <h5 class="font-weight-semi-bold mb-0">Recent Orders</h5>
            </div>

            <div class="card-body pt-0">
                <div class="table-responsive-xl">
                    <table class="table text-nowrap mb-0">
                        <thead>
                        <tr>
                            <th class="font-weight-semi-bold border-top-0 py-2">#</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Name</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Card_Id</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Academic Year</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Faculty</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Photo</th>
                            <th class="font-weight-semi-bold border-top-0 py-2">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="py-3">149531</td>
                            <td class="py-3">
                                <div>John Doe</div>
                                <div class="text-muted">Acme Inc.</div>
                            </td>
                            <td class="py-3">(000) 111-1234</td>
                            <td class="py-3">$1,230.00</td>
                            <td class="py-3">
                                <span class="badge badge-pill badge-warning">Pending</span>
                            </td>
                            <td class="py-3">
                                
                            </td>
                            <td class="py-3">
                                <div class="position-relative">
                                    <a id="dropDown16Invoker" class="link-dark d-flex" href="#" aria-controls="dropDown16" aria-haspopup="true" aria-expanded="false" data-unfold-target="#dropDown16" data-unfold-event="click" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                        <i class="gd-more-alt icon-text"></i>
                                    </a>

                                    <ul id="dropDown16" class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="dropDown16Invoker" style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                        <li class="unfold-item">
                                            <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                <span class="media-body">Edit</span>
                                            </a>
                                        </li>
                                        <li class="unfold-item">
                                            <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                <i class="gd-close unfold-item-icon mr-3"></i>
                                                <span class="media-body">Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="py-3">149531</td>
                            <td class="py-3">
                                <div>John Doe</div>
                                <div class="text-muted">Acme Inc.</div>
                            </td>
                            <td class="py-3">(000) 111-1234</td>
                            <td class="py-3">$1,230.00</td>
                            <td class="py-3">
                                <span class="badge badge-pill badge-success">Fulfilled</span>
                            </td>
                            <td class="py-3">

                            </td>
                            <td class="py-3">
                                <div class="position-relative">
                                    <a id="dropDown15Invoker" class="link-dark d-flex" href="#" aria-controls="dropDown15" aria-haspopup="true" aria-expanded="false" data-unfold-target="#dropDown15" data-unfold-event="click" data-unfold-type="css-animation" data-unfold-duration="300" data-unfold-animation-in="fadeIn" data-unfold-animation-out="fadeOut">
                                        <i class="gd-more-alt icon-text"></i>
                                    </a>

                                    <ul id="dropDown15" class="unfold unfold-light unfold-top unfold-right position-absolute py-3 mt-1 unfold-css-animation unfold-hidden fadeOut" aria-labelledby="dropDown15Invoker" style="min-width: 150px; animation-duration: 300ms; right: 0px;">
                                        <li class="unfold-item">
                                            <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                <i class="gd-pencil unfold-item-icon mr-3"></i>
                                                <span class="media-body">Edit</span>
                                            </a>
                                        </li>
                                        <li class="unfold-item">
                                            <a class="unfold-link media align-items-center text-nowrap" href="#">
                                                <i class="gd-close unfold-item-icon mr-3"></i>
                                                <span class="media-body">Delete</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
