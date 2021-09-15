@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark"><?php echo e(__('adminlte::adminlte.dashboard')); ?></h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">You are logged in!</p>
                </div>
            </div>
        </div>
    </div>
@stop
