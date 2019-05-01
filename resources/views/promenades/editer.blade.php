@extends('templates.app')

@section('content')
    <h1>Editer une Promenade</h1>

    {!!Form::open(['action' => ['PromenadesController@update', $promenade->ID], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('titre','Titre:')}}
            {{Form::text('titre', $promenade->titre, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('auteur','Auteur (qui êtes-vous):')}}
            {{Form::text('auteur', $promenade->auteur, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('pays','Pays:')}}
            {{Form::text('pays', $promenade->pays, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('ville','Ville:')}}
            {{Form::text('ville', $promenade->ville, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('codePostal','Code Postal:')}}
            {{Form::text('codePostal', $promenade->codePostal, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('depart','Départ:')}}
            {{Form::text('depart', $promenade->depart, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('arrivee','Arrivée:')}}
            {{Form::text('arrivee', $promenade->arrivee, ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('descr', 'Description des étapes:')}}
            {!!Form::textarea('descr', $promenade->descr, ['class' => 'form-control'])!!}
        </div>
        {{-- <div class="form-group">
            {{Form::label('photo','Photo:')}}
            {{Form::text('photo', $promenade->photo, ['class' => 'form-control'])}}
        </div> --}}
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection
