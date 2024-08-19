<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class EventsController extends Controller
{
    public function index()
    {
      $datas = Event::all();
      // dd($datas);
        return view('events.index',compact('datas'));
    }

public function list(){
    $datas = Event::all();
    return view('events.list',compact('datas'));
}

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
     
            // Validate the request data
            $data = $request->validate([
                'image1' => 'required|mimes:png,jpg,jpeg',
                'image2' => 'required|mimes:png,jpg,jpeg',
                'image3' => 'required|mimes:png,jpg,jpeg',
                'title' => 'required|string|',
                'description' => 'required|string',
                'date' => 'required|date',
            ]);

            // Handle image uploads
            $imageNames = [];
            foreach (['image1', 'image2', 'image3'] as $imageKey) {
                $image = $request->file($imageKey);
                $imageName = time() . '_' . $imageKey . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/images/events'), $imageName);
                $imageNames[$imageKey] = $imageName;
            }

            // Prepare data for insertion
            $eventData = array_merge($data, $imageNames);

            try{
                Event::create($eventData);
                return redirect(route('events.list'))->with('success', 'Event added to the database.');
            }catch(Exception $e){
                Log::error('Error adding event: ' . $e->getMessage());

            // Redirect with error message
            return back()->with('error', 'There was a problem adding the event. '.$e->getMessage());  
            }


           
          

            
           
            
      
    }
    
    public function edit(){
        
    }

    public function delete($id){
        
        
    }
}
