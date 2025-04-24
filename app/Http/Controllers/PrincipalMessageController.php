<?php

namespace App\Http\Controllers;

use App\Models\principal_message;
use Illuminate\Http\Request;

class PrincipalMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $principal_message =principal_message::paginate(10);
        return view('admin.about.principal_message.index', compact('principal_message'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.principal_message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('admin.about.principal_message.create');
        // dd(request()->all());
        $data = $request->validate([
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('principal_photo','public');
        }
        principal_message::create($data);

        return redirect()->back()->with('status', 'Principal Messages created successfully!');
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
        $principal_message = principal_message::find($id);
        return view('admin.about.principal_message.edit', compact('principal_message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, principal_message $principal_message)
    {
        $data = $request->validate([
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $image_path = public_path("/storage/") . $principal_message->photo;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $data['photo'] = $request->file('photo')->store('principal_photo');
        }

        $principal_message->update($data);

        return redirect()->route('principal_message', $principal_message->id)->with('status', 'Principal Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $principal_message->delete();
        $principal_message = principal_message::find($id);
        $principal_message->delete();
        $image_path = public_path("/storage/") . $principal_message->photo;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        // return $image_path;
        // dd($request);
        return redirect()->route('principal_message')->with('status', 'Principal Messages Delete Successfully');
    }
}
