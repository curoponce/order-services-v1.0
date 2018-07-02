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
    			<h1>Reporte de usuarios</h1>
    			<table class="table">
    				<thead>
    					<tr>
    						<th>Id</th>
	    					<th>nombres</th>
	    					<th>E-mail</th>
                            <th>Número de Telefono/Celular</th>
                            <th>Dirección</th>
    					</tr>
    				</thead>

    				<tbody>
    					@foreach($usuarios as $usuario)
    					<tr>
    						<td>{{ $usuario->id }}</td>
    						<td>{{ $usuario->nombre }} {{ $usuario->apellidos }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->direccion }}</td>
    					</tr>
    					@endforeach
    				</tbody>
    			</table>

    		</div>
    	</div>
    </div>
</body>
</html>