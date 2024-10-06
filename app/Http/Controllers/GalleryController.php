<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery; // Assuming you have a Gallery model
use Illuminate\Support\Facades\Log;

class GalleryController extends Controller
{
    public function index()
    {
        $datas = Gallery::orderBy('created_at','desc')->get();
        return view('gallery.index',compact('datas'));
    }

    public function list()
    {
        $datas = Gallery::all();
        return view('gallery.list', compact('datas'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        // Validate the request data
        $data = $request->validate([

            'image' => 'required|mimes:png,jpg,jpeg',

        ]);

        // Handle image upload
        $image = $request->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('uploads/images/gallery'), $imageName);
        $data['image'] = $imageName;

        try {
            Gallery::create($data);
            return redirect(route('gallery.list'))->with('success', 'Gallery item added successfully.');
        } catch (\Exception $e) {
            Log::error('Error adding gallery item: ' . $e->getMessage());

            // Redirect with error message
            return back()->with('error', 'There was a problem adding the gallery item. ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $gallery = Gallery::find($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function editSave(Request $request)
    {
        $data = $request->validate([
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $id = $request->input('id');

        try {
            $gallery = Gallery::findOrFail($id);

            $updateData = [];

            // Handle image upload if present
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/images/gallery'), $imageName);
                $updateData['image'] = $imageName;
            }

            $gallery->update($updateData);

            return redirect()->route('gallery.list')->with('success', 'Gallery item updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('gallery.list')->with('error', 'Failed to update gallery item: ' . $th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $gallery = Gallery::find($id);

            if (!$gallery) {
                return redirect(route('gallery.list'))->with('status', 'Gallery item not found.');
            }

            if ($gallery->delete()) {
                return redirect(route('gallery.list'))->with('status', 'Gallery item deleted successfully.');
            } else {
                return redirect(route('gallery.list'))->with('status', 'Gallery item not deleted.');
            }
        } catch (\Throwable $th) {
            return redirect(route('gallery.list'))->with('status', 'Error: ' . $th->getMessage());
        }
    }
}
