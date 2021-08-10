@extends('layouts.main')

@section('title','Projeto Laravel')

@section('content')
    <body>
        <h1>{!!$nome!!} </h1>
        {{-- <img src="{{asset('img/banner.jpg')}}"> --}}
        @if(10>5) <p>a condição é true</p>
        @endif
        <p>{!!$nome!!} e idade {{$idade}}</p> 
        {{-- o que está após o $ é o nome da key no vetor --}}
    @for($i=0;$i<count($arr);$i++)
        <p>{{$arr[$i]}}</p>
        @if($i%2==0)  <p>O i é {{$i}}</p>
        @endif
    @endfor
    @foreach ($arr as $array )
    {{-- abaixo mostra a key do array --}}
    <p>{{$loop->index}}</p> 
    <p>{{$array}}</p> 
    @endforeach
    {{-- php puro abaixo --}}
    @php
        $name="Joaquim";
        if($name=='Joaquim') echo $name;
    @endphp

@endsection
