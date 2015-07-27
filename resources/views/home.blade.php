@extends('app')

@section('content')

<div id="home">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Hoofdpagina</div>

                    <div class="panel-body text-center">
                        <h3>U bent succesvol ingelogd!</h3>
                        <h4>Vanaf hier kunt u:</h4>
                        <ul>
                        <li><a href="{{url('/admin/illustrations')}}">Illustraties-lijst bekijken</a></li>
                        <li><a href="{{url('/admin/illustrations/create')}}">Illustraties toevoegen</a></li>
                        <li><a href="{{url('/admin/tags/overview')}}">Tags toevoegen</a></li>
                        <li><a href="{{url('/admin/analytics')}}">Statistieken bekijken</a></li>
                        </ul>

                        {{--<div class="row">--}}
                            {{--<div class="col-lg-6 box">Illustraties-lijst bekijken</div>--}}
                            {{--<div class="col-lg-6 box">Illustraties toevoegen</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-lg-6 box">Tags toevoegen</div>--}}
                            {{--<div class="col-lg-6 box">Statistieken bekijken</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection