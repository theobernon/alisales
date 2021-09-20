@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{$customer->name}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{route('customer.update',['customer'=>$customer])}}">
                @csrf
                @method("PUT")
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <h3 class="profile-username text-center">{{$customer->name}}</h3>

                        <div class="form-group">
                            <label for="name">{{__('Name')}}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$customer->name}}">
                        </div>
                        <div class="form-group">
                            <label for="address">{{__('Address')}}</label>
                            <input type="text" class="form-control" id="address" name="address" value="{{$customer->address}}">
                        </div>
                        <div class="form-group">
                            <label for="postalCode">{{__('Postal code')}}</label>
                            <input type="text" class="form-control" id="postalCode" name="postalCode" value="{{$customer->postalCode}}">
                        </div>
                        <div class="form-group">
                            <label for="city">{{__('City')}}</label>
                            <input type="text" class="form-control" id="city" name="city" value="{{$customer->city}}">
                        </div>
                        <div class="form-group">
                            <label for="email">{{__('email')}}</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{$customer->email}}">
                        </div>
                        <div class="form-group">
                            <label for="url">{{__('Website')}}</label>
                            <input type="text" class="form-control" id="url" name="url" value="{{$customer->url}}">
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary float-right">
                    </div>
                </div>
            <!-- /.card -->
            </form>
        </div>
    </div>
@stop
