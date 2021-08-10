<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nomeProg="João&&";
        $idade=29;
        $array=[20,40,60,80,100];
        return view('welcome',
        [
            'nome'=>$nomeProg,
            'idade'=>$idade,
            'arr'=>$array
        ]);
    }
    
    public function create(){
        return view('events.create');
    }

    public function contact(){
        return view('contact');
    }  
    
    public function queryString(){ 
        $busca=request('search'); // pego o que vem no parametro ?search, ex ?search=short $busca=short
        return view('product',['busca' => $busca]);
    }
    public function produtos($id=null){ // parametro opcional
        return view('product',['id' => $id]);
    }
}