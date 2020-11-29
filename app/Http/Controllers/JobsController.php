<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Joblisting;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function create_index()
    {
        return view('jobs.create');
    }

    public function listings()
    {
        $jobs = Joblisting::latest()->paginate(10);
        return view('jobs.listings', [
            'jobs' => $jobs
        ]);
    }

    public function create_listing(Request $request)
    {

        // dd(auth()->user());
        // dd($request);
        
        $this->validate($request, [
            'category' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:64000'],
            'requirements' => ['required', 'string', 'max:64000'],
            'location' => ['required', 'string', 'max:255'],
            'apply_link' =>  ['required', 'url', 'max:255']
        ]);
        
    
        auth()->user()->jobs()->create($request->only(
            'category',
            'company_name',
            'description',
            'requirements', 
            'location',
            'apply_link'
        ));

        return back();
    }
}
