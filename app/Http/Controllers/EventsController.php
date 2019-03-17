<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show','store','edit','destroy']] );
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $EventsInfo = Event::all();
        return view('pages.events')->with('EventsInfo',$EventsInfo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request ,[
            'title'      => 'required',
            'location'   => 'required',
            'time'       => 'required',
            'description'=> 'required',
            'image'      => 'required'
        ]);
        
        //Using tinker to insert to the database
        $event = new Event();
        $event->title = $request->input('title');
        $event->location = $request->input('location');
        $event->time = $request->input('time');
        $event->body = $request->input('description');
        $event->image = $request->input('image');
        $event->save();

         return redirect('/events')->with('success','Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ShowedEvent = Event::find($id);
        return view('pages.show_event')->with('EventInfo',$ShowedEvent);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ShowedEvent = Event::find($id);
        return view('pages.edit_event')->with('EventInfo',$ShowedEvent);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request ,[
            'title' => 'required',
            'location' => 'required',
            'time' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);

        $event = Event::find($id);
        $event->title = $request->input('title');
        $event->location = $request->input('location');
        $event->time = $request->input('time');
        $event->body = $request->input('description');
        $event->image = $request->input('image');
        $event->save();
        
        return redirect('/events')->with('success','Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect('/events')->with('success','Post Removed!');
    }
}
