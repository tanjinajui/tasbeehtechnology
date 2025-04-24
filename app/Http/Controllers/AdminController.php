<?php

namespace App\Http\Controllers;

use App\Models\Institute;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view()
    {
        $totalInstitutes = Institute::count();
        $totalPendingInstitutes = Institute::where('status', 'pending')->count();
        $totalApprovedInstitutes = Institute::where('status', 'approved')->count();

        return view('admin.dashboard', compact('totalInstitutes', 'totalPendingInstitutes', 'totalApprovedInstitutes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
