<h1> Aplicación de notas </h1>
<a href="{{url('/notas/save-note')}}">Crear Notas</a><br/>

@if(session('status'))
    {{session('status')}}
@endif
<h3>Listado de notas </h3>

<ul>
@foreach($notes as $note)
<li>
  <ul>
<li>{{$note->title}}</li>
<li><a href="{{url('/notas/note/'.$note->id)}}">Ver</a></li>
<li><a href="{{url('/notas/delete-note/'.$note->id)}}">Borrar</a></li>
</ul>
</li>
@endforeach
</ul>
