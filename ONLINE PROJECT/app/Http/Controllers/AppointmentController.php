<?php

namespace App\Http\Controllers;

use App\Events\AppointmentCreated;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        $validated = $request->validate([
            'date' => 'required|date',
            'time' => 'required',
            // Add other validation rules
        ]);

        // Create appointment
        $appointment = Appointment::create($validated);

        // Dispatch the event
        event(new AppointmentCreated($appointment));

        return redirect()
            ->back()
            ->with('success', 'Randevu başarıyla oluşturuldu.');
    }
}