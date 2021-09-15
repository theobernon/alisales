@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{__("Customers")}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">

                    <h3 class="profile-username text-center">{{$customer->name}}</h3>


                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>{{__('Address')}}</b>
                            <span class="float-right">{{$customer->address}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>{{__('Postal code')}}</b>
                            <span class="float-right">{{$customer->postalCode}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>{{__('City')}}</b>
                            <span class="float-right">{{$customer->city}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>{{__('Email')}}</b>
                            <span class="float-right">{{$customer->email}}</span>
                        </li>
                        <li class="list-group-item">
                            <b>{{__('Website')}}</b>
                            <a class="float-right" href="{{$customer->url}}" target="_blank">
                                <i class="fa fa-external-link-alt"></i>
                            </a>
                        </li>
                    </ul>

                    <a href="{{route('customer.edit',['customer'=>$customer])}}" class="btn btn-primary btn-block"><b>{{__('Update')}}</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-9">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">

                    <h3> {{__('Orders')}}</h3>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@stop

