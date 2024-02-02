<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\User;
use App\Models\Announcement;

class DashboardController extends Controller
{
    public function index()
    {

        $companyCount = Company::count();


        $userCount = User::count();


        $announcementCount = Announcement::count();



        return view('admin.stats', compact(
            'companyCount',
            'userCount',
            'announcementCount',

        ));
        // return view('admin.stats');
    }
}
