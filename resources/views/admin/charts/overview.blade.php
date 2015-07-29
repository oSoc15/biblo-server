@extends('......main')


@section('content')
<div id="analytics">
  <div class="col-lg-6 col-lg-push-4">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Grafieken<!--has to be dynamic based on the a href--></h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div id="columnchart_material" style="width: 700px; height: 500px;"></div>
                </div>
            </div>
        </div>

    </div> <!-- /.row (in main.blade.php) don't remove! -->
</div><!-- /.container-fluid (in main.blade.php) don't remove!-->

</div>


<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Illustratie', 'Totaal', 'Like', 'Dislike'],
          ['Boos', 1000, 400, 600],
          ['Blij', 650, 450, 200],
          ['Verdrietig', 660, 330, 330]
        ]);

        var options = {
          chart: {
            title: 'Totaal - Like - Dislike analyse',
            subtitle: ''
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, options);
      }
    </script>

</body>
</html>
@stop