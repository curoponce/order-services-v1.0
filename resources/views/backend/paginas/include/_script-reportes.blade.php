  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Adminsitradores',    {{ $administradorCount }}],
          ['Clientes',    {{ $clienteCount }}],
          ['Trabajadores',    {{ $trabajadorCount }}],
        ]);

        var options = {
          /*title: 'My Daily Activities',*/
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],

          ['Ordenes en espera',    {{ $ordenEspera }}],
          ['Ordenes en proceso',    {{ $ordenProceso }}],
          ['Ordenes Finalizadas',    {{ $ordenFinalizado }}],

        ]);

        var options = {
          /*title: 'My Daily Activities',*/
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>

    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Servicios', 'Porcentaje'],
          @foreach($servicios as $servicio)
          ["{{ $servicio->titulo }}", {{ $servicio->ordenes->count() }}],
          @endforeach
        ]);

        var options = {
          /*title: 'Chess opening moves',*/
          /*width: 900,*/
          legend: { position: 'none' },
          chart: { /*title: 'Servicios',*/
                   subtitle: 'Popularidad por porcentaje' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Porcentaje'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>

    <script type="text/javascript">
      google.charts.load("current", {packages:['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ["Element", "Total de Ordenes", { role: "style" } ],

          @foreach ($usuarios as $usuario)
            @if ($usuario->ordenes->count() > 0)
              ["{{ $usuario->nombre }} {{ $usuario->apellidos }}", {{ $usuario->ordenes->count() }}, "#b87333"],
            @endif
          @endforeach
        ]);

        var view = new google.visualization.DataView(data);
        view.setColumns([0, 1,
                         { calc: "stringify",
                           sourceColumn: 1,
                           type: "string",
                           role: "annotation" },
                         2]);

        var options = {
          /*title: "",*/
          /*width: 600,
          height: 400,*/
          bar: {groupWidth: "95%"},
          legend: { position: "none" },
        };
        var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
        chart.draw(view, options);
    }
    </script>