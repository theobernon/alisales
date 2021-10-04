<x-form.form route="{{$route}}" method="{{$method}}">
    <!-- Profile Image -->
    <div class="card card-primary card-outline">
        <div class="card-body box-profile">
            <h3 class="profile-username text-center">{{__('Add an order')}}</h3>

            <x-form.input type="date" label="Date" name="date" value="{{date('Y-m-d')}}"></x-form.input>
            <x-form.input type="time" label="Time" name="time" value="{{date('H:i')}}"></x-form.input>
            <x-form.input type="number" label="Amount" name="amount" value=""></x-form.input>
            <x-form.input type="number" label="Amount VTA" name="amountVTA" value=""></x-form.input>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <x-form.submit></x-form.submit>
        </div>
    </div>
</x-form.form>
