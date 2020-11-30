<?php

namespace App\Http\Controllers;

use App\Models\Joblisting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function dashboard()
    {
        $jobs = auth()->user()->jobs()->latest()->paginate(2);
        return view('jobs.dashboard', [
            'jobs' => $jobs
        ]);
    }

    public function delete_listing(Joblisting $job)
    {
        $job->delete();
        return back();
    }
}
