@extends('......main')


@section('content')
<div id="illustrations">
        <div id="page-wrapper" class="col-lg-6 col-lg-push-4">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Illustraties<!--has to be dynamic based on the a href--></h1>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="btn btn-success btn-add">
                        <a href="{{route('illustrations.create')}}">Voeg afbeelding toe </a>
                    </div>
                </div>


            </div>
                <!-- /.col-lg-12 -->

            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">
                    <table>
                        <thead>
                            <tr>
                                <th>Illustraties</th>
                                <th>Naam</th>
                                <th>Acties</th>
                                <th>Tags</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($illustrations as $illustration)
                                <tr>
                                    <th><img src="/images/{{$illustration->id}}.png" alt="plaatje"/></th>
                                    <th>{{$illustration->name}}</th>
                                    <th><a href="{{ route('illustrations.edit', array($illustration->id)) }}">Wijzigen</a> | <a href="{{route('illustrations.remove', array($illustration->id))}}">Verwijderen</a></th>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
    </div> <!-- /.row (in main.blade.php) don't remove! -->
</div><!-- /.container-fluid (in main.blade.php) don't remove!-->
</body>
</html>
@stop
