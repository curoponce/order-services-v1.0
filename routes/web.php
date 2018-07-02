<?php


/*DB::listen(function($query)
{
	echo "<pre>{{ $query->sql }}</pre>";
});*/

Route::get('/images/{path}/{attachment}', function($path, $attachment) {
	$file = sprintf('storage/%s/%s', $path, $attachment);
	if(File::exists($file)) {
		return Image::make($file)->response();
	}
});


Route::get('/', 'PaginaController@inicio')->name('pagina.inicio');

Route::get('servicios', 'PaginaController@servicios')->name('pagina.servicios');

Route::get('solicitar-servicio', 'PaginaController@formSolicitarServicio')->name('pagina.solicitar.servicio');

Route::post('solicitar-servicio', 'PaginaController@solicitarServicio')->name('solicitar.servicio');

Route::get('servicio/{id}', 'ServicioController@show')->name('servicio.detalle');

Route::get('/nosotros', 'PaginaController@nosotros')->name('pagina.nosotros');

Route::get('/proyectos', 'PaginaController@proyectos')->name('pagina.proyectos');

Route::get('/contactanos', 'PaginaController@contacto')->name('pagina.contactanos');

Route::post('/contactar', 'PaginaController@enviarMensaje')->name('contactar');

Auth::routes();


Route::group(['namespace' => 'Backend', 'prefix'=>'back-end'], function (){

	//panel de control
	Route::get('/panel-de-control', 'DashboardController@index')->name('dashboard');

	//usuarios
	Route::resource('usuarios', 'UsuarioController');

	//mensajes
	Route::resource('mensajes', 'MensajeController');

	//trabajadores
	Route::resource('trabajadores', 'TrabajadorController');

	//ordenes
	Route::resource('ordenes', 'OrdenDeServicioController');

	//inicia la orden 
	Route::put('iniciar-orden/{id}', 'EstadoController@iniciar')->name('iniciar');

	//finaliza la orden
	Route::put('finalizar-orden/{id}', 'EstadoController@finalizar')->name('finalizar');

	//generar reporte de las ordenes en pdf
	Route::post('reporte/ordenes/pdf','ReporteController@generarPdfOrdenes')->name('generar.pdf.ordenes');

	Route::post('reporte/usuarios/pdf','ReporteController@generarPdfUsuarios')->name('generar.pdf.usuarios');

});