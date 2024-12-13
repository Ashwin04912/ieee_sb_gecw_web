<?php

namespace App\Http\Controllers;

use App\Models\WieExecom;
use App\Models\WieWieExecom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

class WieController extends Controller
{
    public function index(){
        $datas = WieExecom::all();
        return view('wie_society.index',compact("datas"));
}

public function list()
    {
        $datas = WieExecom::all();
        return view('wie_society.list', compact('datas'));
    }

    public function create()
    {
        return view('wie_society.create');
    }

    public function store(Request $request)
    {

        // Validate the request data
        $data = $request->validate([
            'name' => 'required|string',
            'title' => 'required|string|',
            'society' => 'nullable|string|',
            'image' => 'required|mimes:png,jpg,jpeg',
            'github' => 'nullable|string',
            'insta' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);

        // Handle image uploads
        $imageNames = [];
        $image = $request->file('image');
        $name = $request->string('name')->trim(" ");
        $imageName = time() . '_' . $name . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/images/wieexecoms'), $imageName);
        $data['image'] = $imageName;

        try {
            WieExecom::create($data);
            return redirect(route('wieexecom.list'))->with('success', 'WieExecom added to the database.');
        } catch (Exception $e) {
            Log::error('Error adding execom: ' . $e->getMessage());

            // Redirect with error message
            return back()->with('error', 'There was a problem adding execom. ' . $e->getMessage());
        }
    }

    public function edit($id)
    { {
            $execom = WieExecom::find($id);
            return view('wie_society.edit1', compact('execom'));
        }
    }
    public function editSave(Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
            'title' => 'string',
            'society' => 'nullable|string',
            // 'id' => 'integer|exists:execoms,id',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'github' => 'nullable|string',
            'insta' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);
        // dd($data);
    
        $id = $request->input('id');

        // dd($id);
    
        try {
            $execom = WieExecom::findOrFail($id);
    
            $updateData = [
                'name' => $data['name'],
                'title' => $data['title'],
                'society' => 'nullable|string',
                'github' => $data['github'],
                'insta' => $data['insta'],
                'linkedin' => $data['linkedin'],
            ];
    // dd($updateData);
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = $data['name'];
                $imageName = time() . '_' . $name . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads/images/wieexecoms'), $imageName);
                $updateData['image'] = $imageName;
            }
    
            $execom->update($updateData);
    
            return redirect()->route('wieexecom.list')->with('success', 'WieExecom updated successfully');
        } catch (\Throwable $th) {
// dd($th);
            return redirect()->route('wieexecom.list')->with('error', 'Failed to update execom: ' . $th->getMessage());
        }
    }
    


    public function delete($id)
    {
        try {

            $execom = WieExecom::find($id);


            if (!$execom) {
                return redirect(route('wieexecom.list'))->with('status', 'WieExecom not found');
            }


            // if ($execom->image_path) {

            //     if (Storage::exists($execom->image_path)) {
            //         Storage::delete($execom->image_path);
            //     }
            // }


            if ($execom->delete()) {
                return redirect(route('wieexecom.list'))->with('status', 'WieExecom deleted successfully');
            } else {
                return redirect(route('wieexecom.list'))->with('status', 'WieExecom not deleted');
            }
        } catch (\Throwable $th) {
            return redirect(route('wieexecom.list'))->with('status', 'Error: ' . $th->getMessage());
        }
    }
}
