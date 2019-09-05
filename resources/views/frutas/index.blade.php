<h1>Listado de Frutas</h1>

<a href="{{action('FrutasController@getNaranjas')}}">IR a naranjas</a>
<a href="{{action('FrutasController@anyPeras')}}">IR a peras</a>
<ul>
@foreach($frutas as $fruta)
<li>{{$fruta}}</li>
@endforeach
</ul>
<h1> Formulario</h1>
<form action="{{url('/recibir')}}" method="POST">

  <p>
  <label for="nombre">Nombre de la Fruta</label>
  <input type="text" name="nombre" /></p>
  <p>
  <label for="descripcion">Descripcion de la Fruta</label>
  <textarea name="descripcion" ></textarea></p>
  <input type="submit" value="Enviar"/>
</form>
