@extends('main')


@section('content')
<div id="edit">
<div class="col-lg-6 col-lg-push-4">

    <div class="row">
        <div class="col-lg-12">
            <h1>Voeg afbeelding toe</h1>
        </div>
    </div>

{!! Form::model($illustration, array('files' => true)) !!}
<div class="form-group">
    {!! Form::label('Naam') !!}<br>
    {!! Form::text ('name') !!}
</div>

<div class="form-group">
    {!! Form::label('Afbeelding') !!}
    {!! Form::file('image', array('accept'=>'image/png', 'class'=>'')) !!}
</div>
@if(isset($illustration))
    <img src="/images/{{$illustration->id}}.png" class="edit-resize"/>
@endif


{{--<div class="form-group">--}}
    {{--{!! Form::label('Kies een afbeelding: ') !!}--}}
{{--</div>--}}

    {!! Form::submit(Route::currentRouteName() == 'illustrations.create' ? 'Voeg toe' : 'Opslaan', ['class' => 'btn btn-add']) !!}

    {!! Form::close() !!}
</div>


 <!-- <div class="col-lg-4 col-lg-push-2">
            <div class="row">
                <h1 class="col-lg-12 text-center">voeg een plaatje toe</h1>
            </div>

                <form>
                  <div class="form-group">
                    <label for="imageIllustration">Kies de illustratie</label>
                    <input type="file" id="imageIllustration">
                    <p class="help-block">Example block-level help text here.</p>
                  </div>

                  <div class="form-group">
                    <label for="nameIllustrations">Naam v/d illustratie</label>
                    <input type="text" class="form-control" id="nameIllustrations" placeholder="naam van de illustratie">
                  </div>

                  <div class="form-group">
                    <label for="tagsIllustration">Geef de tags in</label>
                    <input type="text" class="form-control" id="tagsIllustration" placeholder="tags" data-role="tagsinput">
                  </div>

                  <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
 -->
</div>
@stop