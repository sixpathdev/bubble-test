@extends('layouts.app')

@section('title', "Bitcoin Json Data")

@section('content')
<ul class="list-group">
    {{$raw}}
</ul>
@endsection