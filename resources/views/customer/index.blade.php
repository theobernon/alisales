@extends('adminlte::page')

@section('title', env('APP_NAME'))

@section('content_header')
    <h1 class="m-0 text-dark">{{__("Customers")}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped datatable">
                        <thead>
                            <tr>
                                <th>{{e(__('Name'))}}</th>
                                <th>{{e(__('Address'))}}</th>
                                <th>{{e(__('Email'))}}</th>
                                <th>{{e(__('Website'))}}</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{$customer->name}}</td>
                                    <td>{{$customer->Address}}<br>
                                        {{$customer->postalCode}}-{{$customer->city}}
                                    </td>
                                    <td>{{$customer->email}}</td>
                                    <td>{{$customer->url}}</td>
                                    <td>
                                        <a class="btn btn-default btn-xs" href="{{route('customer.show',['customer'=>$customer])}}">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                        <a class="btn btn-default btn-xs" href="{{route('customer.edit',['customer'=>$customer])}}">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        <a class="btn btn-danger btn-xs" href="{{route('customer.delete',['customer'=>$customer])}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
    @parent
    <script>
        $('.datatable').DataTable();
    </script>
@endsection
