<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\MissionVision;
use Illuminate\Http\Request;

class MissionVisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mission_vision = MissionVision::paginate(2);
        return view('admin.about.mission_vision.index', compact('mission_vision'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('admin.institute.create', compact('divisions', 'districts', 'upazilas'));
        return view('admin.about.mission_vision.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('admin.about.mission_vision.create');
        // dd(request()->all());
        // dd(request('salary'));
        // dd('hello there');
        //validation
        // return redirect()->back()->with('status', 'Mission Vision created successfully!');
        // return $request->all();
        // dd(request()->all());
        $data = $request->validate([
            'mission' => 'required',
            'vision' => 'required',
        ]);
        MissionVision::create($data);

        return redirect()->back()->with('status', 'Mission Vision created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MissionVision $mission_vision)
    {
        return view('admin.about.mission_vision.edit', compact('mission_vision'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MissionVision $mission_vision)
    {
        $data = $request->validate([
            'mission' => 'required',
            'vision' => 'required',
        ]);

        $mission_vision->update($data);

        return redirect()->route('mission_vision', $mission_vision->id)->with('status', 'Mission Vision updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MissionVision $mission_vision)
    {
        $mission_vision->delete();
        // dd($request);
        return redirect()->route('mission_vision')->with('status', 'Mission Vision Delete Successfully');
    }
}
