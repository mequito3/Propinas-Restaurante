<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipDistributionController extends Controller
{
    public function index()
    {
        // Start with an empty list of staff, no more mock data
        $staff = [];
        $totalHours = 0;

        return view('tip-distribution.index', compact('staff', 'totalHours'));
    }

    public function store(Request $request)
    {
        // Validate the incoming array if necessary
        $request->validate([
            'final_total_tips' => 'required|numeric|min:0.01',
            'staff' => 'required|array',
            'staff.*.name' => 'required|string',
            'staff.*.hours' => 'required|numeric|min:0.1',
            'staff.*.payment' => 'required|numeric|min:0',
        ]);

        $totalTips = $request->input('final_total_tips');
        $staffList = $request->input('staff'); // Here you have the dynamic array to save to DB later

        // This is a placeholder for the backend logic (Saving Shift, Employee Logs, etc.)

        return back()->with('success', 'Turno cerrado. Total liquidado: Bs. ' . number_format($totalTips, 2) . ' entre ' . count($staffList) . ' empleados.');
    }
}
