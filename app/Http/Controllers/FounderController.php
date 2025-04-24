<?php

namespace App\Http\Controllers;
use App\Models\founder;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $founder =founder::paginate(10);
        return view('admin.about.founder.index', compact('founder'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.founder.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('admin.about.founder.create');
        // dd(request()->all());
        // dd(request('message'));
        $data = $request->validate([
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('founder_photo','public');
        }
        founder::create($data);

        return redirect()->back()->with('status', 'Founder Messages created successfully!');
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
        $founder = founder::find($id);
        return view('admin.about.founder.edit', compact('founder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, founder $founder)
    {
        $data = $request->validate([
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $image_path = public_path("/storage/") . $founder->photo;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $data['photo'] = $request->file('photo')->store('founder_photo');
        }

        $founder->update($data);

        return redirect()->route('founder', $founder->id)->with('status', 'Founder Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $founder = founder::find($id);
        $founder->delete();
        $image_path = public_path("/storage/") . $founder->photo;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        // dd($request);
        return redirect()->route('founder')->with('status', 'founder Messages Delete Successfully');
    }
}
