@extends('templates.app')

@section('content')
    <h1>Promenades</h1>
    @if (count($promenades) > 0)
        @foreach ($promenades as $promenade)
            <div style="border-style:double">
                <h3><a href="/promenades/{{$promenade->ID}}">{{$promenade->titre}}</a><h3>
                <h4>Ville: {{$promenade->ville}}</h4>
            </div>
        @endforeach
        {{$promenades->links()}}
    @else
        <p>Nous n'avons pas trouvé de promenade</p>
    @endif
@endsection