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
            <!-- /.sidebar-collapse -->
        </div>
</div>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1>Dashboard<!--has to be dynamic based on the a href--></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <table data-toggle="table" data-url="" data-query-params="queryParams" data-pagination="true"
                        data-search="true">
                    <thead>
                    <tr>
                        <th data-field="cover" data-formatter="coverFormatter" data-align="center">Illustraties</th>
                        <th data-field="tags" data-align="center">Tags</th>
                        <th data-formatter="operateFormatter" data-align="center"></th>
                    </tr>
                    </thead>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>


</body>
</html>
@stop
