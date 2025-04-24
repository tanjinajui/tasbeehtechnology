<?php

namespace App\Http\Controllers;
use App\Models\board_of_director;
use Illuminate\Http\Request;

class BoardOfDirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $board_of_director =board_of_director::paginate(2);
        return view('admin.about.board_of_director.index', compact('board_of_director'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.board_of_director.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(request()->all());
        $data = $request->validate([
            'no_of_director' => 'required',
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('board_of_director_photo');
        }
        board_of_director::create($data);

        return redirect()->back()->with('status', 'Board of Director Messages created successfully!');
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
        $board_of_director = board_of_director::find($id);
        return view('admin.about.board_of_director.edit', compact('board_of_director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, board_of_director $board_of_director)
    {
        $data = $request->validate([
            'no_of_director' => 'required',
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $image_path = public_path("/storage/") . $board_of_director->photo;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $data['photo'] = $request->file('photo')->store('board_of_director_photo','public');
        }

        $board_of_director->update($data);

        return redirect()->route('board_of_director', $board_of_director->id)->with('status', 'Principal Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $board_of_director = board_of_director::find($id);
        $board_of_director->delete();
        $image_path = public_path("/storage/") . $board_of_director->photo;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        // dd($request);
        return redirect()->route('board_of_director')->with('status', 'Board of Director Messages Delete Successfully');
    }
}
