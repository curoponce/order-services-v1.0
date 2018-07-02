<!DOCTYPE html>
<html>
<head>
	<title>Reporte de usuarios</title>
	<style>
        h1{
            text-align: center;
        }
        th, td {
            border-bottom: 1px solid #338DFF;
        }
        th {
            background-color: #33BEFF;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}
        
    </style>
</head>
<body>
	<div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<h1>Reporte de ordenes de servicio</h1>
    			<table class="table">
    				<thead>
    					<tr>
    						<th>Id</th>
	    					<th>Solicitante</th>
	    					<th>Trabajador</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de culminación</th>
                            <th>Tipo de Servicio</th>
	    					<th>Estado Actual</th>
    					</tr>
    				</thead>

    				<tbody>
    					@foreach($ordenes as $orden)
    					<tr>
    						<td>{{ $orden->id }}</td>
    						<td>{{ $orden->user->nombre }} {{ $orden->user->apellidos }}</td>

                            @if($orden->trabajador_id)
    						<td>{{ $orden->trabajador->user->nombre }}</td>
                                @else
                                <td>sin asignar</td>
                            @endif

                            <td>{{ $orden->fecha_inicio }}</td>
                            <td>{{ $orden->fecha_fin }}</td>
                            <td>{{ $orden->servicio->titulo }}</td>
    						<td>{{ $orden->estado->nombre }}</td>
    					</tr>
    					@endforeach
    				</tbody>
    			</table>

    		</div>
    	</div>
    </div>
</body>
</html>