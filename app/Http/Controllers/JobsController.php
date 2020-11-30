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
        $jobs = Joblisting::latest()->paginate(2);
        return view('jobs.listings', [
            'jobs' => $jobs
        ]);
    }

    public function view_details(Joblisting $jobDetail)
    {
       return view('jobs.details', [
           'job' => $jobDetail
       ]);
    }

    public function create_listing(Request $request)
    {

        // dd(auth()->user());
        // dd($request);
        
        $this->validate($request, [
            'category' => ['required', 'string', 'max:255'],
            'company_logo' => ['required', 'url'],
            'company_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:64000'],
            'requirements' => ['required', 'string', 'max:64000'],
            'location' => ['required', 'string', 'max:255'],
            'apply_link' =>  ['required', 'url', 'max:255'],
            'duration' => ['required', 'string', 'max:255'],
            'apply_by' => ['required', 'date'],
            'start_date' => ['required', 'date', 'after_or_equal:apply_by'],
            'stipend' => ['required','integer', 'min:1']
        ]);
        
    
        auth()->user()->jobs()->create($request->only(
            'category',
            'company_name',
            'description',
            'requirements', 
            'location',
            'apply_link',
            'start_date',
            'apply_by',
            'duration',
            'company_logo',
            'stipend'
        ));

        return back();
    }
}
