@extends('templates.app')

@section('content')
    <h1>Créer Promenades</h1>

    {{Form::open(['action' => 'PromenadesController@store', 'method' => 'POST'])}}
        <div class="form-group">
            {{Form::label('titre','Titre:')}}
            {{Form::text('titre', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('auteur','Auteur (qui êtes-vous):')}}
            {{Form::text('auteur', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('pays','Pays:')}}
            {{Form::text('pays', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('ville','Ville:')}}
            {{Form::text('ville', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('codePostal','Code Postal:')}}
            {{Form::text('codePostal', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('depart','Départ:')}}
            {{Form::text('depart', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('arrivee','Arrivée:')}}
            {{Form::text('arrivee', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('descr', 'Description des étapes:')}}
            {!!Form::textarea('descr', '', ['class' => 'form-control'])!!}
        </div>
        <div class="form-group">
            {{Form::label('photo','Photo:')}}
            {{Form::text('photo', '', ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {{Form::close()}}
@endsection