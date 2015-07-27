@extends('......main')

@section('content')


<div id="tags">
    <div id="page-wrapper" class="col-lg-5 col-lg-push-4 text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Maak een nieuwe tag aan<!--has to be dynamic based on the a href--></h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                {!! Form::model($tags) !!}

                <div class="form-group ">
                    {!! Form::label('tag') !!}<br>
                    {!! Form::text ('name') !!}
                </div>

                {!! Form::submit('Opslaan', ['class' => 'btn btn-add']) !!}
                {!! Form::close() !!}
            </div>
        </div>




    </div>
</div>


</div> <!-- /.row (in main.blade.php) don't remove! -->
</div><!-- /.container-fluid (in main.blade.php) don't remove!-->

@endsection