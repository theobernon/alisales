@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{$order->customer->name}} > Commande {{$order->id}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <h3 class="profile-username text-center">{{$order->customer->name}}
                        <!-- x-customer.buttons.show :customer="$order->customer"></x-customer.buttons.show -->
                    </h3>

                    <x-list.group>
                        <x-list.group-item label="Date">
                            <x-date :date="$order->datetime"></x-date>
                        </x-list.group-item>
                        <x-list.group-item label="Amount">
                            <x-amount :amount="$order->amount"></x-amount>
                        </x-list.group-item>
                        <x-list.group-item label="Amount VTA">
                            <x-amount :amount="$order->amountVTA"></x-amount>
                        </x-list.group-item>
                    </x-list.group>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <div class="col-9">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <h3>{{__('Products')}}</h3>

                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@stop
