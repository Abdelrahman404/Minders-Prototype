<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gate;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['Home','available_forms','Events']] );
        }
    public function Home(){
        return view('pages.home');
    }
    public function Events(){
        $EventNumber = 'Event Number One!';
        /*Number it self for what we wana to call the variable inside the view for a single value
        return view('pages.events')->with('Number',$EventNumber);
        */
        $events1 = 'Minders19 Opening';
        $events = array(
                's1' => 'Minders18 Worskshops',
                's2' => 'Minders18 Out of loop',
                's3' => 'Minders19 Closing'
        );

        return view('pages.events')->with('events',$events)->with('events1',$events1);
    }
    
    public function create_event(){

        if(!Gate::allows('isIT')){
            abort(403,"Sorry, You can do this actions");
        }
        return view('pages.create_event');
    }
    
    public function show_event(){
        return view('pages.show_event');
    }

    public function available_forms(){
        return view('pages.available_forms');
    }

   /* public function form_responses(){
        $events1 = 'Minders19 Opening';
        return view('pages.form_responses')->with('events1',$events1);
    }
    */
}
