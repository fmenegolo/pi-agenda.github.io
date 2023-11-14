<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){
            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        } else {
            $events = Event::all();
        }

        

        return view('welcome', ['events' => $events, 'search' => $search ]);

    }

    public function create(){
        
        return view('events.create');

    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->date = $request->date;
        $event->classroom = $request->classroom; 
        $event->private = $request->private; 
        $event->description = $request->description;
        $event->items = $request->items;
                
        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request->image->move(public_path('assets/imgEvents'), $imageName);

            $event->image = $imageName;
        
        }

        $user = auth()->user();
        $event->user_id = $user->id;

        $event->save();

        return redirect('/events/create')->with('msg', 'Aula cadastrada com sucesso!');
    }

    public function show($id) {

        $event = Event::findOrfail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
        
    }

    public function dashboard() {

        $user = auth()->user();

        $events = $user->events;

        return view('events.dashboard', ['events' => $events]);

    }

    public function destroy($id) {

        $event = Event::findOrfail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Aula excluida com sucesso!');
    }

    public function edit($id) {

        $event = Event::findOrfail($id);

        return view('events.edit', ['event' => $event]);
    }

    public function update(Request $request) {
        
        $data = $request->all(); 
        
        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            
            $request->image->move(public_path('assets/imgEvents'), $imageName);

            $data['image'] = $imageName;
        
        }

        Event::findOrfail($request->id)->update($data);

        return redirect('/dashboard')->with('msg', 'Aula editada com sucesso!');
    }
}

