<table class="table table-bordered table-striped datatable">
    <thead>
    <tr>
        <th>{{__('Name')}}</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>
                    {{$category->name}}
            </td>
            <td>
                <x-buttons.show :item="$category"></x-buttons.show>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
