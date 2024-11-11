<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Achievement; // Assuming you have an Achievement model
use Illuminate\Support\Facades\Log;

class AchieveController extends Controller
{
    public function index()
    {
        $datas = Achievement::all();
        return view('achievements.index',compact('datas'));
    }

    public function list()
    {
        $datas = Achievement::all();
        return view('achievements.list', compact('datas'));
    }

    public function create()
    {
        return view('achievements.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        // Validate the request data
        $data = $request->validate([
            // 'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/images/achievements'), $imageName);
            $data['image'] = $imageName;
        }

        try {
            Achievement::create($data);
            return redirect(route('achievements.list'))->with('success', 'Achievement added successfully.');
        } catch (\Exception $e) {
            Log::error('Error adding achievement: ' . $e->getMessage());
            return back()->with('error', 'There was a problem adding the achievement. ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $achievement = Achievement::find($id);
        if (!$achievement) {
            return redirect(route('achievements.list'))->with('error', 'Achievement not found.');
        }
        return view('achievements.edit', compact('achievement'));
    }

    public function editSave(Request $request)
    {
        $data = $request->validate([
            // 'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|mimes:png,jpg,jpeg',
        ]);

        $id = $request->input('id');

        try {
            $achievement = Achievement::findOrFail($id);

            $updateData = [
                
                'description' => $data['description'],
            ];

            // Handle image upload if present
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('uploads/images/achievements'), $imageName);
                $updateData['image'] = $imageName;
            }

            $achievement->update($updateData);

            return redirect()->route('achievements.list')->with('success', 'Achievement updated successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('achievements.list')->with('error', 'Failed to update achievement: ' . $th->getMessage());
        }
    }

    public function delete($id)
    {
        try {
            $achievement = Achievement::find($id);

            if (!$achievement) {
                return redirect(route('achievements.list'))->with('status', 'Achievement not found.');
            }

            if ($achievement->delete()) {
                return redirect(route('achievements.list'))->with('status', 'Achievement deleted successfully.');
            } else {
                return redirect(route('achievements.list'))->with('status', 'Achievement not deleted.');
            }
        } catch (\Throwable $th) {
            return redirect(route('achievements.list'))->with('status', 'Error: ' . $th->getMessage());
        }
    }
}
