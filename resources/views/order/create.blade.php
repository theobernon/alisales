@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{__('Create')}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{route('order.store')}}">
                @csrf
                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                            <h3 class="profile-username text-center"></h3>

                            <div class="form-group">
                                <label for="amount">{{__('Amount')}}</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="">
                            </div>
                            <div class="form-group">
                                <label for="amountTVA">{{__('Amount TVA')}}</label>
                                <input type="text" class="form-control" id="amountTVA" name="amountTVA" value="">
                            </div>
                            <div class="form-group">
                                <label for="datetime">{{__('Date')}}</label>
                                <input type="date" class="form-control" id="datetime" name="datetime" value="">
                            </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary float-right">
                        </div>
                    </div>
                </div>
            <!-- /.card -->
            </form>
        </div>
    </div>
@stop
