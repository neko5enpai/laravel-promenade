@extends('templates.app')

@section('content')
    <a href="/promenades" class="btn btn-default">Go Back</a>
    <h1>{{$promenade->titre}}</h1>
    <h4>Pays : {{$promenade->pays}}</h4>
    <h4>Ville : {{$promenade->ville}}</h4>
    <h5>Auteur : {{$promenade->auteur}}</h5>
    <div>
        {!!$promenade->descr!!}
    </div>
    <a href="/promenades/{{$promenade->ID}}/edit" class="btn btn-default">Editer</a>
    {!!Form::open(['action' => ['PromenadesController@destroy', $promenade->ID], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection