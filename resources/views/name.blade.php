@extends('master')

@section('content')
    
    <h3><span> {{ $name->results[0]->name}} má meniny {{ $name->results[0]->day}}.{{ $name->results[0]->month}}</span></h3>

@endsection