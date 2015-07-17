@extends('main')


@section('content')

        <div id="page-wrapper" class="col-lg-6 col-lg-push-3">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Illustraties<!--has to be dynamic based on the a href--></h1>
                </div>
                <div class="col-lg-6 text-right">
                    <div class="btn btn-success btn-add">
                        <a href="{{url('/admin/add-image')}}">voeg afbeelding toe </a>
                    </div>
                </div>


            </div>
                <!-- /.col-lg-12 -->

            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <table data-toggle="table" data-url="/admin/sample-data" data-query-params="queryParams" data-pagination="true"
                            data-search="true">
                        <thead>
                        <tr>
                            <th data-field="cover" data-formatter="coverFormatter" data-align="center">Illustraties</th>
                            <th data-field="name"  data-align="center">Naam</th>
                            <th data-field="tags" data-align="center">Tags</th>
                            <th data-formatter="operateFormatter" data-align="center"></th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div> <!-- /.row (in main.blade.php) don't remove! -->
</div><!-- /.container-fluid (in main.blade.php) don't remove!-->
</body>
</html>
@stop
