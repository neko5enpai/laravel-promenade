@extends('templates.app')

@section('content')
    <a href="/promenades" class="btn btn-default">Go Back</a>
    <h1>{{$promenade->titre}}</h1>
    <h4>Ville : {{$promenade->ville}}</h4>
    <div>
        {{$promenade->descr}}
    </div>
@endsection