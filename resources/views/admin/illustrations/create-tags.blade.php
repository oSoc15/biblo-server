@extends('main')

@section('content')

<div id="create-tags">
    <div id="page-wrapper" class="col-lg-5 col-lg-push-4">
        <div class="row">
            <div class="col-lg-12">
                <h1>Tags<!--has to be dynamic based on the a href--></h1>
            </div>
        </div>
            <!-- /.col-lg-12 -->

        <!-- /.row -->


        <div class="row">
            <div class="col-lg-12">
                @foreach ($tags as $tag)

                 <li>{{$tag->name}}</li>

                @endforeach
            </div>
        </div>
    </div>
</div>
    </div> <!-- /.row (in main.blade.php) don't remove! -->
</div><!-- /.container-fluid (in main.blade.php) don't remove!-->

@endsection