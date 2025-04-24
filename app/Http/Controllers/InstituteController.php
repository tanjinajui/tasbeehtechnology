<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Division;
use App\Models\Institute;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutes = Institute::paginate(3);
        return view('admin.institute.institutes', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();

        return view('admin.institute.create', compact('divisions', 'districts', 'upazilas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'country_id' => 'nullable',
            'division_id' => 'nullable',
            'district_id' => 'nullable',
            'upazila_id' => 'nullable',
            'address' => 'required',
            'phone_number' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
            'logo' => 'nullable',
            'established' => 'nullable',
            'education_level' => 'nullable',
            'education_medium' => 'nullable',
        ]);

        if ($request->file('logo')) {
            $data['logo'] = $request->file('logo')->store('institute_logos');
        }
        
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';

        Institute::create($data);

        return redirect()->back()->with('status', 'Institute created successfully!');
    }


    // Apply for institute
    public function apply(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'country_id' => 'nullable',
            'division_id' => 'nullable',
            'district_id' => 'nullable',
            'upazila_id' => 'nullable',
            'address' => 'required',
            'phone_number' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
            'logo' => 'nullable',
            'established' => 'nullable',
            'education_level' => 'nullable',
            'education_medium' => 'nullable',
        ]);

        $data['logo'] = $request->file('logo') ? $request->file('logo')->store('institute_logos') : '';
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';

        Institute::create($data);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Institute $institute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Institute $institute)
    {
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();

        return view('admin.institute.edit', compact('institute', 'divisions', 'districts', 'upazilas'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Institute $institute)
    {
        $data = $request->validate([
            'name' => 'required',
            'type' => 'required',
            'country_id' => 'nullable',
            'division_id' => 'nullable',
            'district_id' => 'nullable',
            'upazila_id' => 'nullable',
            'address' => 'required',
            'phone_number' => 'nullable',
            'email' => 'nullable|email',
            'website' => 'nullable',
            'logo' => 'nullable',
            'established' => 'nullable',
            'education_level' => 'nullable',
            'education_medium' => 'nullable',
            'status' => 'nullable|in:pending,approved,rejected',
        ]);

        if ($request->file('logo')) {
            $data['logo'] = $request->file('logo')->store('institute_logos');
        }

        $institute->update($data);

        return redirect()->route('institutes', $institute->id)->with('status', 'Institute updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        
        if ($request->nip_no && $request->nip_no == User::find(Auth::id())->nip_no) {
            $institute = Institute::find($request->id);
            $institute->delete();
            return redirect()->route('institutes')->with('status', 'Institute deleted successfully!');
            
        }
        // dd($request);
        return redirect()->route('institutes')->with('status', 'You are not authorized to delete this institute!');
    }
}
