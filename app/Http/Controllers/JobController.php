<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {// all data show 
      // $jobs = Job::with('employer')->get();
        // dd('hello there');
        $jobs = Job::with('employer')->latest()->cursorPaginate(3);
            //    $jobs = Job::all();
            //     dd($jobs[1]->title);
            return view('jobs.index',[
                        'job' => $jobs
                       
                    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('jobs.create');
        // dd(request()->all());
        // dd(request('salary'));
        // dd('hello there');
        //validation
    request()->validate([
        'title' => ['required', 'min:6'],
        'salary' => ['required']
    ]);
    Job::create([
        'title' => request('title'),
        'salary' =>request('salary'),
        'employer_id' =>2
    ]);
    
    return redirect('/job');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $jobs)
    {
        return view ('jobs.show', ['jobs' => $jobs]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $jobs)
    {
        return view ('jobs.edit', ['jobs' => $jobs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Job $jobs)
    {
        //validate
    request()->validate([
        'title' => ['required', 'min:6'],
        'salary' => ['required']
    ]);
    //authorize (on hold...)
    // $job = Job::findOrFail($id); //null
    //update the job
    $jobs->update([
        'title' => request('title'),
        'salary' =>request('salary'),
    ]);
    //and persist
    //redirect to the job(specific page) page
    return redirect('/jobs/'.$jobs->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $jobs)
    {
        //authorize (on hold...)
    $jobs->delete();
    return redirect('/job');
    }
}
