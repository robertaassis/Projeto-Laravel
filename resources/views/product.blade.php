@extends('layouts.main')

@section('title','Projeto Laravel- Products')

@section('content')

@if($id!=null)
<p>Exibindo produto id: {{$id}}</p>
@endif
@if($busca!=null) <p>Usuario está buscando por: {{$busca}}</p>
@endif
@endsection