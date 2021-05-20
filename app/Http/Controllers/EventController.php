<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Events;
use Session;
use Auth;

class EventController extends Controller
{
    public function eventlist()
    {
    	$user_id = Auth::user()->id;

        $events = Events::where(['user_id' => $user_id, 'status' => 'active'])->orderBy('created_at','desc')->get();

        return view('events.eventlist', compact('events'));
    }

    public function eventpost(Request $request)
    {
    	$input = $request->all();

    	$user_id = Auth::user()->id;
    	$input['event_type'] = implode(',', $input['event_type']);
    	$input['user_id'] = $user_id;

        Events::create($input);

        Session::flash('message', 'Event created successfully');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('eventlist');
    }

    public function editevent($id)
    {

    	$event = Events::find($id);

        return view('events.edit', compact('event'));
    }


    public function eventupdate(Request $request,$id)
    {
    	$input = $request->all();

    	$user_id = Auth::user()->id;
    	$input['event_type'] = implode(',', $input['event_type']);
    	$input['user_id'] = $user_id;


    	$event = Events::find($id);

    	$event->update($input);

    	Session::flash('message', 'Event updated successfully');
        Session::flash('alert-class', 'alert-success');

        return redirect()->route('eventlist');
    }

    public function eventdelete($id){
   
	    Events::find($id)->delete($id);
	  
	    return response()->json([
	    	'status' => 200,
	        'success' => 'Event deleted successfully!'
	    ]);
	}


}
