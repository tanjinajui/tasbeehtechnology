<?php

namespace App\Http\Controllers;
use App\Models\department_responsibles;
use Illuminate\Http\Request;

class DepartmentResponsiblesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department_responsibles =department_responsibles::paginate(5);
        return view('admin.about.department_responsibles.index', compact('department_responsibles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.department_responsibles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $data = $request->validate([
            'department_name' => 'required',
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('department_photo');
        }
        department_responsibles::create($data);

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
        $department_responsibles = department_responsibles::find($id);
        return view('admin.about.department_responsibles.edit', compact('department_responsibles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, department_responsibles $department_responsibles)
    {
        $data = $request->validate([
            'department_name' => 'required',
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'name' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
        ]);

        if ($request->file('photo')) {
            $image_path = public_path("/storage/") . $department_responsibles->photo;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $data['photo'] = $request->file('photo')->store('department_photo','public');
        }

        $department_responsibles->update($data);

        return redirect()->route('department_responsibles', $department_responsibles->id)->with('status', 'Department Responsibles updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $department_responsibles = department_responsibles::find($id);
        $department_responsibles->delete();
        $image_path = public_path("/storage/") . $department_responsibles->photo;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        // dd($request);
        return redirect()->route('department_responsibles')->with('status', 'Department Responsibles Delete Successfully');
    }
}
