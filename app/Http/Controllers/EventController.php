<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events=Event::all(); // pega todos os eventos do banco
       
        return view('welcome', ['events'=>$events]);
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

    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');

    }
}  
