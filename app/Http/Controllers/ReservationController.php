<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'check-in-date' => 'required|date',
            'check-out-date' => 'required|date|after:check-in-date',
            'guests' => 'required|integer|min:1',
        ]);

        // Process the reservation logic here
        // You can access the form data using $request->input('field_name')
        // For example, $checkInDate = $request->input('check-in-date');

        // Return a response or redirect as per your application's requirements
        return redirect()->back()->with('success', 'Reservation submitted successfully!');
    }
}