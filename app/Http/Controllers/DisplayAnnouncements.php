<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
// use App\Models\User;
use App\Models\Announcement;

class DisplayAnnouncements extends Controller
{
    //
    public function index()
    {
        // $announcements = Announcement::all();

        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        $companies = Company::all();

        //dd($announcements);
        return view('announcements', compact('announcements', 'companies'));
    }

    public function show($id)
    {

        $announcement = Announcement::find($id);

        return view('showannouncement', compact('announcement'));
    }
}
