<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index(){

        $search=request('search'); // id="search" em welcome.blade.php
        if($search){
            $events=Event::where('title','like','%'.$search.'%')->get();
        }
        else{
            $events=Event::all(); 
        }
       // pega todos os eventos do banco
       
        return view('welcome', ['events'=>$events, 'search'=>$search]);
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
        // dd($request->hasFile('image'));
        $event->title = $request->title;
        $event->date=$request->date; // no models coloquei protected $dates
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items=$request->items; // fez o casting em Models -> Events
        

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage=$request->image;

            $extension=$requestImage->extension();

            //hash
            $imageName=md5($requestImage->getClientOriginalName(). strtotime("now"));

            $request->image->move(public_path('img/events'),$imageName); // salva imagem nesse path com o nom nome $imageName

            $event->image=$imageName; // salva imagem no banco

        }

        // autenticação com login
        // $user=auth()->user(); // pega id de quem tá logado
        // $event->user_id=$user->id; 

        $event->save();

        return redirect('/')->with('msg','Evento criado com sucesso');

    }

    public function show($id){

        $event=Event::findOrFail($id);

        //$eventOwner=User::where('id', $event->user_id)->first()->toArray(); // o primeiro que achar guarda e transforma ele em array
       
        return view('events.show',['event'=>$event 
       // ,'eventOwner'=> $eventOwner
        ]);
    }

    public function dashboard(){
        $events=Event::all();
        return view('events.dashboard',[ 'events' => $events ]);
    }

    public function destroy($id){

        Event::findOrFail($id)->delete();
        return redirect('dashboard')->with('msg','Evento excluído com sucesso!');
    }

    public function edit($id){

        $event=Event::findOrFail($id);

        return view('events.edit',[ 'events' => $event ]);

    }

    public function update(Request $request){ // form
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage=$request->image;

            $extension=$requestImage->extension();

            //hash
            $imageName=md5($requestImage->getClientOriginalName(). strtotime("now"));

            $request->image->move(public_path('img/events'),$imageName); // salva imagem nesse path com o nom nome $imageName

            $request->image=$imageName; // salva imagem no banco

        }
        //  dd($request->image);
        Event::findOrFail($request->id)->update($request->all()); // atualiza o que veio do post
        // Event::findOrFail($request->id)->update($imageName);
        return redirect('dashboard')->with('msg','Evento atualizado com sucesso!');

    }
}  
