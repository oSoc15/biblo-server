@extends('main')


@section('content')
<div id="create">
<div class="col-lg-6 col-lg-push-4">

    <div class="row">
        <div class="col-lg-12">
            <h1></h1>
            <h1>Voeg een afbeelding toe</h1>
        </div>
    </div>

{!! Form::model($illustration, array('files' => true)) !!}
<div class="form-group">
    {!! Form::label('Naam') !!}<br>
    {!! Form::text ('name') !!}
</div>

<div class="form-group">
    {!! Form::label('tags') !!}<br>

    <select style="width:350px;" multiple data-placeholder="Voeg 5 tags toe aan de afbeelding" name="tags" class="chosen-select" >
        @foreach ($tags as $tag)
            <option value="{{$tag->name}}">{{$tag->name}}</option>
        @endforeach
    </select>

</div>

<div class="form-group">
    {!! Form::label('Afbeelding') !!}
    {!! Form::file('image', array('accept'=>'image/png', 'class'=>'input-image')) !!}
</div>
@if(isset($illustration))
    <img src="/images/{{$illustration->id}}.png" class="edit-resize"/>
@endif



    {!! Form::submit(Route::currentRouteName() == 'illustrations.create' ? 'Voeg toe' : 'Opslaan', ['class' => 'btn btn-add']) !!}

    {!! Form::close() !!}
</div>

</div>
@stop