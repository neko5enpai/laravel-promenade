@extends('templates.app')

@section('content')
    <h1>Promenades</h1>
    @if (count($promenades) > 0)
        @foreach ($promenades as $promenade)
            <div class="well">
                <h3>{{$promenade->titre}}<h3>
                <small>Ville: {{$promenade->ville}}</small>
            </div>
        @endforeach
        
    @else
        <p>Nous n'avons pas trouvé de promenade</p>
    @endif
@endsection