@extends('layouts.main')

@section('title','Projeto Laravel- Products')

@section('content')

@if($id ?? ''!=null)
{{-- fez a variavel ser opcional --}}
<p>Exibindo produto id: {{$id}}</p>
@endif
@if($busca ?? ''!=null) <p>Usuario está buscando por: {{$busca}}</p>
{{-- fez a variavel ser opcional --}}
@endif
@endsection