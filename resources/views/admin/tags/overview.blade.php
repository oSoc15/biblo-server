@extends('......main')

@section('content')


<div id="tags">
    <div id="page-wrapper" class="col-lg-5 col-lg-push-4">
        <div class="row">
            <div class="col-lg-6">
                <h1>Tags<!--has to be dynamic based on the a href--></h1>
            </div>
            <div class="col-lg-6 text-right">
             <a href="{{url('admin/tags/create')}}"><div class="btn btn-add">Nieuwe tag maken</div></a>
            </div>
        </div>



        <div class="row taglist">
            @foreach ($tags as $tag)

             <div class="col-lg-4">
                <div class="taglist-tag">
                    {{$tag->name}}

                     <span>
                         <a href="{{route('tags.remove', array($tag->id))}}">
                            <i class="fa fa-remove"></i>
                         </a>
                     </span>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>


</div> <!-- /.row (in main.blade.php) don't remove! -->
</div><!-- /.container-fluid (in main.blade.php) don't remove!-->

@endsection