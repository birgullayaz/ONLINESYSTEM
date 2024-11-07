<?php

namespace App\Listeners;

use App\Events\AppointmentCreated;
use App\Jobs\SendAppointmentEmail;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendAppointmentNotification implements ShouldQueue
{
    public function handle(AppointmentCreated $event)
    {
        $appointment = $event->appointment;
        
        $data = [
            'date' => $appointment->date,
            'time' => $appointment->time,
            // Add other appointment data
        ];

        SendAppointmentEmail::dispatch($appointment->user->email, $data);
    }
}