<?php

namespace App\Http\Controllers;
use App\Models\Appointments;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;



class InfoController extends Controller
{
    public function AboutUs()
    {
   $providers = Users::where('providers', 'Hizmet Saglayici')->get();
   return view('aboutUs', ['providers' => $providers]);

    }


    public function TakeAppointment()
    {

        $providers = Users::where('providers', 'Hizmet Saglayici')->get();
        return view('appointment', ['providers' => $providers]);
    }

    public function SaveAppointment(Request $request)
    { 
        $email = Session('email');
      if($request->input('email') != $email ){
        return back()->with('error',"Kendi adınıza randevu alınız");
      }else
      {
        $new_appointments = new Appointments([            
            'costumer_email' => $request->input('email'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'provider' => $request->input('provider'),
        ]);
        
        $new_appointments->save();

        SendWelcomeEmailJob::dispatch([
            'email' => $request->input('email'),
            'name' => Users::where('email', $request->input('email'))->value('name')
        ]);

        return redirect('/OnlineSystem')->with('success', 'Randevu başarıyla kaydedildi!');
       }
    }
}
