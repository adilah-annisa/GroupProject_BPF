<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Sample data for dashboard (replace with real DB queries later)
        $stats = [
            'total_donors' => 124,
            'total_donations' => 5600000, // in IDR
            'campaigns' => 8,
        ];

        $recentDonations = [
            ['donor' => 'Aisyah', 'amount' => 50000, 'campaign' => 'Bantuan Pendidikan', 'date' => '2025-12-01'],
            ['donor' => 'Budi', 'amount' => 150000, 'campaign' => 'Bencana Alam', 'date' => '2025-11-28'],
            ['donor' => 'Citra', 'amount' => 250000, 'campaign' => 'Kesehatan', 'date' => '2025-11-20'],
        ];

        return view('admin.dashboard', compact('stats', 'recentDonations'));
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
