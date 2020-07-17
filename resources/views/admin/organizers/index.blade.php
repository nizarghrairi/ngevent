@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> Les sections principales </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Principale</a>
                                </li>
                                <li class="breadcrumb-item active">Organizers
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Organizers </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')



                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">

                                        <a class="btn btn-primary" href="{{route('admin.organisor.create')}}">
                                            <i class="fa fa-plus-square"></i> Add New organisor
                                        </a>

                                        <table
                                            class="table table-dark table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>Name</th>
                                                <th>Mobile</th>
                                                <th>Email</th>
                                                <th>Logo</th>
                                                <th>Section</th>
                                                <th> Status</th>
                                                <th>Measures</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($organisors)
                                                @foreach($organisors as $organisor)
                                                    <tr>
                                                        <td>{{$organisor -> name}}</td>
                                                        <td>{{$organisor -> mobile}}</td>
                                                        <td>{{$organisor -> email}}</td>
                                                        <td><img style="width: 150px; height: 100px;"
                                                                 src="{{$organisor -> 	logo}}">
                                                        </td>
                                                        <td> {{$organisor -> category-> name}}</td>
                                                        <td> {{$organisor -> getActive()}}</td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.organisor.edit',$organisor -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Modification</a>


                                                                <a href="{{route('admin.organisor.destroy',$organisor->id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>


                                                                <a href="{{route('admin.organisor.status',$organisor -> id)}}"
                                                                   class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    @if($organisor ->active ==0)
                                                                        Activate
                                                                    @else
                                                                        Deactivate
                                                                    @endif

                                                                </a>


                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
