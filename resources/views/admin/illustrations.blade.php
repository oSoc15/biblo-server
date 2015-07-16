@extends('main')


@section('content')

<div id="wrapper">
        <div class="navbar-default sidebar" role="navigation">
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

<div id="page-wrapper">

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

    <div class="row">
        <div class="col-lg-12 text-center">
            <h1>voeg een plaatje toe</h1>
        </div>

       <div class="col-lg-4 col-lg-push-4">
            <form>
              <div class="form-group">
                <label for="imageIllustration">Kies de illustratie</label>
                <input type="file" id="imageIllustration">
                <p class="help-block">Example block-level help text here.</p>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Naam v/d illustratie</label>
                <input type="text" class="form-control" id="nameIllustrations" placeholder="naam van de illustratie">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1">Geef de tags in</label>
                <input type="text" class="form-control" id="tagsIllustration" placeholder="tags">
              </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">tags</label>
                  <input type="text" class="form-control" id="tagsIllustration" placeholder="tags">
                </div>

              <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
        <!-- /.row -->
</div>
    <!-- /#page-wrapper -->


</body>
</html>
@stop
