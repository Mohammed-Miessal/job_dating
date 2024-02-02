<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Models\Company;
use App\Models\User;
use App\Models\Announcement;
use App\Http\Requests\StoreAnnouncementRequest;
use App\Http\Requests\UpdateAnnouncementRequest;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd ( $announcements = Announcement::all());
        $announcements = Announcement::paginate(10);

        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $companies = Company::all();
        $users = User::all();
        return view('admin.announcements.add', compact('companies', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnnouncementRequest $request)
    {
        //
        $validatedData = $request->validated();
        $announcement = new Announcement([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'content' => $validatedData['content'],
            'user_id' => $validatedData['user_id'],
            'company_id' => $validatedData['company_id'],
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('announcement_images', 'public');
            $announcement->image = basename($imagePath);
        }

        $announcement->save();

        return redirect()->route('announcements.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        // dd($announcement);
        $announcement = Announcement::find($id);

        // dd($announcement);
        return view('admin.announcements.show', compact('announcement'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Announcement $announcement)
    {
        //
        $companies = Company::all();
        $users = User::all();

        // dd($announcement);
        return view('admin.announcements.edit', compact('announcement', 'users', 'companies'));
    }

    /**
     * Update the specified resource in storage.
     */


    public function update(UpdateAnnouncementRequest $request, $id)
    {
        $validatedData = $request->validated();

        $announcement = Announcement::findOrFail($id);

        $announcement->title = $validatedData['title'];
        $announcement->description = $validatedData['description'];
        $announcement->content = $validatedData['content'];
        // You may want to check if 'user_id' and 'company_id' are present in the request before updating
        $announcement->user_id = $validatedData['user_id'] ?? $announcement->user_id;
        $announcement->company_id = $validatedData['company_id'] ?? $announcement->company_id;

        if ($request->hasFile('image')) {
            // Delete the old image
            Storage::disk('public')->delete('announcement_images/' . $announcement->image);

            // Upload the new image
            $imagePath = $request->file('image')->store('announcement_images', 'public');
            $announcement->image = basename($imagePath);
        }

        $announcement->save();

        return redirect()->route('announcements.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
        // dd($announcement);
        if ($announcement->image) {
            Storage::disk('public')->delete('announcement_images/' . $announcement->image);
        }


        $announcement->delete();

        return redirect()->route('announcements.index')->with('success', 'Announcement deleted successfully.');
    }
}
