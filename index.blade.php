@extends('main')
@section('library')
    @if(isset($obj->lib))
        {{ asset("css/$obj->lib.css") }}
    @else
        {{ asset("css/landing.css") }}
    @endif
@endsection
@section('content')
    @if(isset($obj->lib))
        @include($obj->page)
    @else
        @include('landing')
    @endif
@endsection
