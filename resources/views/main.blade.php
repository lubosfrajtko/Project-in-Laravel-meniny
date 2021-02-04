@extends('master')

@section('content')
    
    <h3><span>Dnes je pondelok {{ $nameday->data->dates->day }}.{{ $nameday->data->dates->month}}.{{$year['year']}}</span></h3>
    <h2>Kto má dnes meniny?</h2>
    <h1>{{ $nameday->data->namedays->sk }}</h1>

    <p>Zajtra má meniny <span>{{ $namedaytomorrow->data->namedays->sk }}</span></p>



@endsection