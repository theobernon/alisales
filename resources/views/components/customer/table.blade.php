<table class="table table-bordered table-striped datatable">
    <thead>
    <tr>
        <th>{{__('Name')}}</th>
        <th>{{__('Address')}}</th>
        <th>{{__('Email')}}</th>
        <th>{{__('Website')}}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td>
                <x-buttons.show :item="$customer">
                    {{$customer->name}}
                </x-buttons.show>
            </td>
            <td>
                <x-address address="{{$customer->address}}" postalCode="{{$customer->postalCode}}" city="{{$customer->city}}">
                </x-address>
            </td>
            <td>{{$customer->email}}</td>
            <td>
                <a href="{{$customer->url}}">
                    {{$customer->url}}
                </a>
            </td>
            <td>
                <x-buttons.show :item="$customer"></x-buttons.show>
                <x-buttons.edit :item="$customer"></x-buttons.edit>
                <x-buttons.delete :item="$customer"></x-buttons.delete>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
