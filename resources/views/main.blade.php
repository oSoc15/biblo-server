<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Biblo Admin-Panel</title>


    <link href="{{elixir('css/normalize.css')}}" rel="stylesheet">
    <link href="{{elixir('css/bootstrap-table.css')}}" rel="stylesheet">
    <link href="{{elixir('css/app.css')}}" rel="stylesheet">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div id="sidebar" class="col-lg-2">
                <div class="navbar-default" role="navigation">
                    <div class="sidebar-nav">
                        <ul class="nav in" id="side-menu">
                            <li class="sidebar-greeting">
                                <img src="http://www.placehold.it/50x50" alt="placeholder" style="padding-bottom:15px;"/><br>
                                Hallo, {{ Auth::user()->name }}
                            </li>
                            <li>
                                <a href="{{url('/admin/dashboard')}}" class=""><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/illustrations')}}" class=""><i class="fa fa-image fa-fw"></i> Illustraties</a>
                            </li>
                            <li>
                                <a href="{{url('/admin/analytics')}}"><i class="fa fa-bar-chart-o fa-fw"></i> Charts</a>
                            </li>
                            <li>
                                <a href="{{ url('/auth/logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
@yield ('content')


    <script src="{{elixir('js/app.js')}}"></script>
    <script src="{{elixir('js/admin.js')}}"></script>
    <script src="{{elixir('js/script.js')}}"></script>
</body>
</html>
