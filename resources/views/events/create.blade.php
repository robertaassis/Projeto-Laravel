@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do evento:</label>
      <input type="file" id="image" name="image" class="form-control-file">
    </div>
    <div class="form-group">
      <label for="title">Título do evento:</label>
      <input type="text" id="title" name="title" class="form-control" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
    </div>

    <div class="form-group">
      <label for="date">Data:</label>
      <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control">
        <option value=""></option>
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>

    <div class="form-group">
      <label for="items">Adicione itens de infraestrutura:</label>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cadeiras">Cadeiras
        {{-- tem que ser em colchete pra ele entender que vai um ou mais tipos de itens --}}
      </div>
      
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Palco">Palco
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Cerveja grátis">Cerveja grátis
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Open Food">Open Food
      </div>
      <div class="form-group">
        <input type="checkbox" name="items[]" value="Brindes">Brindes
      </div>

      </div>
    
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection