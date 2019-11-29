@extends('layouts.app')

@section('title', "Bitcoin data")

@section('content')
<ul class="list-group">
    @foreach ($extracted_data as $key => $value)
    <li class="list-group-item">{{ $key }} - {{ $value }}</li>
    @endforeach
</ul>
@endsection