@extends('admin.app')
@section('title', 'Dashboard')
@section('content')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box">
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
            <h4 class="page-title">Admin Dashboard</h4>
        </div>
    </div>
</div>
@include('admin.sections.flash-message')
<!-- end page title -->

<!-- end row-->
 <div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Latest Store Operators and Distributors </h4>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Name & Email</th>
                                <th>Mobile Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enquiries as $enquiry)
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">{{$enquiry->name}}</h5>
                                    <span class="text-muted font-13">{{$enquiry->email}}</span>
                                </td>
                                <td>{{$enquiry->mobile}}</td>
                                <td class="table-action">
                                    <a href="{{route('admin.store-distributors.show', $enquiry->id)}}" class="action-icon" > <i class="mdi mdi-eye" style="color: #870384"></i></a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card-body-->
        </div> <!-- end card-->

        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-3">Latest Contact Us Enquiries </h4>

                <div class="table-responsive">
                    <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                        <thead>
                            <tr>
                                <th>Name & Email</th>
                                <th>Mobile Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $enquiry)
                            <tr>
                                <td>
                                    <h5 class="font-15 mb-1 font-weight-normal">{{$enquiry->name}}</h5>
                                    <span class="text-muted font-13">{{$enquiry->email}}</span>
                                </td>
                                <td>{{$enquiry->mobile}}</td>
                                <td class="table-action">
                                    <a href="{{route('admin.contactus-enquiries.show', $enquiry->id)}}" class="action-icon" > <i class="mdi mdi-eye" style="color: #870384"></i></a>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->

            </div> <!-- end card-body-->
        </div> <!-- end card-->

    </div>
    <!-- end col-->

    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title mb-4">Latest Player Registrations</h4>
                @foreach($users as $user)
                <div class="media mb-3">
                    <img class="mr-3 rounded-circle" src="{{$user->profile_picture}}" width="40" alt="Generic placeholder image">
                    <div class="media-body">
                        <span class="badge badge-success-lighten float-right">{{$user->mobile}}</span>
                        
                        <h5 class="mt-0 mb-1">{{$user->firstname}} {{$user->lastname}}</h5>
                        <span class="font-13">{{$user->email}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
