<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
{
    public function index()
    {
        $datas = Event::orderBy('date', 'desc')->get();
        // dd($datas);
        return view('events.index', compact('datas'));
    }

    public function list()
    {
        $datas = Event::all();
        return view('events.list', compact('datas'));
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

        try {
            Event::create($eventData);
            return redirect(route('events.list'))->with('success', 'Event added to the database.');
        } catch (Exception $e) {
            Log::error('Error adding event: ' . $e->getMessage());

            // Redirect with error message
            return back()->with('error', 'There was a problem adding the event. ' . $e->getMessage());
        }
    }

    public function edit($id)
    { {
            $event = Event::find($id);
            // dd($event);
            return view('events.edit', compact('event'));
        }
    }
    public function editsave(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
            'id' => 'required|integer|exists:events,id', // Ensure the ID exists in the events table
            'image1' => 'nullable|mimes:png,jpg,jpeg',
            'image2' => 'nullable|mimes:png,jpg,jpeg',
            'image3' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $id = $request->post('id');


        if ($data) {
            try {
                $event = Event::find($id);

                // Prepare the data to be updated
                $updateData = [
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'date' => $data['date'],
                ];

                // Handle image uploads
                foreach (['image1', 'image2', 'image3'] as $imageKey) {
                    if ($request->hasFile($imageKey)) {
                        $image = $request->file($imageKey);
                        $imageName = time() . '_' . $imageKey . '.' . $image->getClientOriginalExtension();
                        $image->move(public_path('uploads/images/events'), $imageName);
                        $updateData[$imageKey] = $imageName;
                    }
                }

                // Update the event with the new data
                $event->update($updateData);

                return redirect(route('events.list'))->with('success', 'Event updated successfully');
            } catch (\Throwable $th) {
                return redirect(route('events.list'))->with('error', 'Failed to update event: ' . $th->getMessage());
            }
        }
    }


    public function delete($id)
    {
        try {
            
            $event = Event::find($id);
    
            
            if (!$event) {
                return redirect(route('events.list'))->with('status', 'Event not found');
            }
    
            
            // if ($event->image_path) { 
               
            //     if (Storage::exists($event->image_path)) {
            //         Storage::delete($event->image_path);
            //     }
            // }
    
           
            if ($event->delete()) {
                return redirect(route('events.list'))->with('status', 'Event deleted successfully');
            } else {
                return redirect(route('events.list'))->with('status', 'Event not deleted');
            }
        } catch (\Throwable $th) {
            return redirect(route('events.list'))->with('status', 'Error: ' . $th->getMessage());
        }
    }
    }
