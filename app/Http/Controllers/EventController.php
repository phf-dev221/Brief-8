<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Association;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $association = auth()->guard('association')->user()->id;

        $events = Event::where('association_id',$association)->get();
       
        return view('association.dashboard', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(Auth::guard('association')->user());
        $request->validate([
            'libelle'=>'required|string|',
            'date_limite_inscription'=>'required|string|',
            'description'=>'string',
            'image'=>'required|image|max:1000',
            'date_evenement'=>'required|string|',
   
        ]);
        $association = new Event();

            $association->libelle =$request->libelle;
            $association->date_limite_inscription =$request->date_limite_inscription;
            $association->description =$request->description;
            $association->description =$request->description;
            $association->date_evenement =$request->date_evenement;
            $association->association_id=Auth::guard('association')->user()->id;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images'), $filename);
                $association['image']= $filename;
            }
           $association->save();


        return back()->with('status', 'Evenement enrigistré avec succés !!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $event = Event::find($id);
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $event = Event::find($id);
        return view('event.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'libelle'=>'required|string|',
            'date_limite_inscription'=>'required|string|',
            'description'=>'string',
            'image'=>'sometimes|required|image|max:1000',
            'date_evenement'=>'required|string|',
   
        ]);
        $association =Event::find($id);

            $association->libelle =$request->libelle;
            $association->date_limite_inscription =$request->date_limite_inscription;
            $association->description =$request->description;
            $association->description =$request->description;
            $association->date_evenement =$request->date_evenement;
            $association->association_id=Auth::guard('association')->user()->id;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('public/images'), $filename);
                $association['image']= $filename;
            }
           $association->update();

            $idevent=Event::find($id);
           return Redirect::route('show',['id'=>$idevent]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/dashboard');
    }
}
