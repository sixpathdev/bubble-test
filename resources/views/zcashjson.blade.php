@extends('layouts.app')

@section('title', "Zcash Json Data")

@section('content')
<ul class="list-group">
    {{$raw}}
</ul>
@endsection