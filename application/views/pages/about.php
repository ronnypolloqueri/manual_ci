<h1>Está en la Página <?php echo $title ?></h1>
<p>
	Esta página(about.php), nos sirve para ejemplificar el uso del archivo
	route.php.
	Notesé que, donde antes escribíamos la url:
</p>

<code>
http://tu_pag_web/index.php/controlador/funcion/parametro
</code>
<p>
	Con la siguiente instrucción ( en application/config/routes.php ):
</p>
<code>
$route['default_controller'] = 'pages/view';
</code>
<p>
	la url se reduce a:
</p>
<code>
	http://tu_pag_web
</code>
<p>
	Y por defecto entra a 'pages/view' y a carga el template 'home'
	que ya esta definida en la función view como template por defecto
	si no se pasa algun parámetro.
</p>

<p>
	Otra configuración del route( en application/config/routes.php ):
</p>
<code>$route['(:any)'] = 'pages/view/$1';</code>
<p>
	Con ella no se hace necesario especificar el controlador(pages), ni la función a cargar(view).
	Tan sólo los parámetros a recibir.
</p>
<code>
http://localhost/manual_ci/index.php/about
</code>