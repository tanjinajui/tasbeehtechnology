<?php

namespace App\Http\Controllers;

use App\Models\vice_principal_message;
use Illuminate\Http\Request;

class VicePrincipalMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vice_principal_message =vice_principal_message::paginate(10);
        return view('admin.about.vice_principal_message.index', compact('vice_principal_message'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.vice_principal_message.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('admin.about.principal_message.create');
        // dd(request()->all());
        // dd(request('message'));
        $data = $request->validate([
            'photo' => 'required|mimes:webp,png,jpg,jpeg|max:3000',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $data['photo'] = $request->file('photo')->store('vice_principal_photo');
        }
        vice_principal_message::create($data);

        return redirect()->back()->with('status', 'Vice Principal Messages created successfully!');
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
        $vice_principal_message = vice_principal_message::find($id);
        return view('admin.about.vice_principal_message.edit', compact('vice_principal_message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vice_principal_message $vice_principal_message)
    {
        $data = $request->validate([
            'photo' => 'nullable',
            'message' => 'required',
        ]);

        if ($request->file('photo')) {
            $image_path = public_path("/storage/") .$vice_principal_message->photo;
            if(file_exists($image_path)){
                @unlink($image_path);
            }
            $data['photo'] = $request->file('photo')->store('vice_principal_photo');
        }

        $vice_principal_message->update($data);

        return redirect()->route('vice_principal_message', $vice_principal_message->id)->with('status', 'Vice Principal Message updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vice_principal_message = vice_principal_message::find($id);
        $vice_principal_message->delete();
        $image_path = public_path("/storage/") . $vice_principal_message->photo;
        if(file_exists($image_path)){
            @unlink($image_path);
        }
        // dd($request);
        return redirect()->route('vice_principal_message')->with('status', 'Vice Principal Messages Delete Successfully');
    }
}
