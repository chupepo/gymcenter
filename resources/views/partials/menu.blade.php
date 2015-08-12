
  @if (!Auth::guest())
    <div class="list-group">
      <a href="/medicion/{{$user->id}}" class="list-group-item">Medición de Tallas</a>
      <a href="#" class="list-group-item">Morbi leo risus</a>
      <a href="#" class="list-group-item">Porta ac consectetur ac</a>
      <a href="#" class="list-group-item">Vestibulum at eros</a>
      <a href="#" class="list-group-item">{{Session::get('tipoUsuario')}}</a>
    </div>
  @endif