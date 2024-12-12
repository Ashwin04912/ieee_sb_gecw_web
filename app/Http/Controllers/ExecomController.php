<?php

namespace App\Http\Controllers;

use App\Models\Execom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;

class ExecomController extends Controller
{
    public function index()
    {
        $datas = Execom::all();
        return view('execom.index', compact('datas'));
    }

    public function list()
    {
        $datas = Execom::all();
        return view('execom.list', compact('datas'));
    }

    public function create()
    {
        return view('execom.create');
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
        $image->move(public_path('uploads/images/execoms'), $imageName);
        $data['image'] = $imageName;

        try {
            Execom::create($data);
            return redirect(route('execom.list'))->with('success', 'Execom added to the database.');
        } catch (Exception $e) {
            Log::error('Error adding execom: ' . $e->getMessage());

            // Redirect with error message
            return back()->with('error', 'There was a problem adding execom. ' . $e->getMessage());
        }
    }

    public function edit($id)
    { {
            $execom = Execom::find($id);
            return view('execom.edit', compact('execom'));
        }
    }
    public function editSave(Request $request)
    {
        $data = $request->validate([
            'name' => 'string',
            'title' => 'string',
            'society' => 'nullable|string',
            'id' => 'integer|exists:execoms,id',
            'image' => 'nullable|mimes:png,jpg,jpeg',
            'github' => 'nullable|string',
            'insta' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);
        // dd($data);
    
        $id = $request->input('id');

        // dd($id);
    
        try {
            $execom = Execom::findOrFail($id);
    
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
                $image->move(public_path('uploads/images/execoms'), $imageName);
                $updateData['image'] = $imageName;
            }
    
            $execom->update($updateData);
    
            return redirect()->route('execom.list')->with('success', 'Execom updated successfully');
        } catch (\Throwable $th) {
// dd($th);
            return redirect()->route('execom.list')->with('error', 'Failed to update execom: ' . $th->getMessage());
        }
    }
    


    public function delete($id)
    {
        try {

            $execom = Execom::find($id);


            if (!$execom) {
                return redirect(route('execom.list'))->with('status', 'Execom not found');
            }


            // if ($execom->image_path) {

            //     if (Storage::exists($execom->image_path)) {
            //         Storage::delete($execom->image_path);
            //     }
            // }


            if ($execom->delete()) {
                return redirect(route('execom.list'))->with('status', 'Execom deleted successfully');
            } else {
                return redirect(route('execom.list'))->with('status', 'Execom not deleted');
            }
        } catch (\Throwable $th) {
            return redirect(route('execom.list'))->with('status', 'Error: ' . $th->getMessage());
        }
    }
}
