<a
    @if($slot=='')
    class="btn btn-primary btn-xs"
    @endif
    href="{{$route}}">
    {!! $slot=='' ? '<i class="fas fa-plus"></i>' : $slot !!}
</a>
