@extends('main')


@section('content')
<div class="container-fluid">

    <div class="row">

        <div id="sidebar" class="col-lg-2">
                <div class="navbar-default" role="navigation">
                    <div class="sidebar-nav">
                        <ul class="nav in" id="side-menu">
                            <li>
                                <a href="#" class=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class=""><i class="fa fa-image fa-fw"></i> Illustraties</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>


        <div id="page-wrapper" class="col-lg-6 col-lg-push-1">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Dashboard<!--has to be dynamic based on the a href--></h1>
                </div>
            </div>
                <!-- /.col-lg-12 -->

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <table data-toggle="table" data-url="http://biblo.dev/admin/sample-data" data-query-params="queryParams" data-pagination="true"
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

        <div class="col-lg-3 col-lg-push-1">
            <div class="row">
                <h1 class="col-lg-12 text-center">voeg een plaatje toe</h1>
            </div>

                <form class="text-center">
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
                <!-- /.row -->
    </div>
            <!-- /#page-wrapper -->
</div>
</body>
</html>
@stop
