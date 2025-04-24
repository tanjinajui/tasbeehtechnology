<?php

namespace App\Http\Controllers;
use App\Models\branch_responsibles;
use Illuminate\Http\Request;

class BranchResposiblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $branch_responsibles =branch_responsibles::paginate(2);
        return view('admin.about.branch_responsibles.index', compact('branch_responsibles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.branch_responsibles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $data = $request->validate([
            'branch_name' => 'required',
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('branch_photo');
        }
        branch_responsibles::create($data);

        return redirect()->back()->with('status', 'Branch Responsibles created successfully!');
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
    public function edit(string $id)
    {
        $branch_responsibles = branch_responsibles::find($id);
        return view('admin.about.branch_responsibles.edit', compact('branch_responsibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, branch_responsibles $branch_responsibles)
    {
        $data = $request->validate([
            'branch_name' => 'required',
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
        ]);

        if ($request->file('photo')) {
            $image_path = public_path("/storage/") . $branch_responsibles->photo;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $data['photo'] = $request->file('photo')->store('branch_photo','public');
        }

        $branch_responsibles->update($data);

        return redirect()->route('branch_responsibles', $branch_responsibles->id)->with('status', 'Branch Responsibles updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $branch_responsibles = branch_responsibles::find($id);
        $branch_responsibles->delete();
        $image_path = public_path("/storage/") . $branch_responsibles->photo;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        // dd($request);
        return redirect()->route('branch_responsibles')->with('status', 'Branch Responsibles Delete Successfully');
    }
}
