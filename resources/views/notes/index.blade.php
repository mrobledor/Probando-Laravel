<h1> Aplicación de notas </h1>
<h3>Listado de notas </h3>

<ul>
@foreach($notes as $note)
<li>{{$note->title}}</li>
@endforeach
</ul>
