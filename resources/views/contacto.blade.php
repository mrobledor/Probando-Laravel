<html>
    <a class="btn btn-primary" href="/" role="button">Go Back</a>
	<head>
		<title>Welvome to Laravel proyect</title>


		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #000000;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<h1>Pagina de Carolina {!!$nombre!!} {{--isset($edad)&& !is_null($edad) ? $edad : 'No existe la edad'--}} </h1>
				@if(is_null($edad))
				<h1>	No existe la edad</h1>
				@else
				 <h3> Si existe la edad : {{$edad}}</h3>
				@endif

				@for($i = 1; $i<=10;$i++)
				<h3>{{$i.' x 2 ='.($i*2)}}</br></h3>
				@endfor
				
			</div>

		</div>

	</body>

</html>
