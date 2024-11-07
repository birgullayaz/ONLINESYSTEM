<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function NewRegister(Request $request)
    {    
        try {
            if($request->input('role') == 1)
            {
                $provider = "Musteri";
            }
            elseif($request->input('role') == 2)
            {
                $provider = "Hizmet Saglayici";
            }
            

            /**Mail kayıtlımı Kontrolü */
            if(DB::table('users')->where('email', $request->input('email'))->exists())
            {
                return redirect('/register')->with('error', 'Bu email adresi zaten kayıtlı!');
            }            
            /** Girilen User datası User tablosuna ekleniyor*/
            $new_users = new Users([
                'name' => $request->input('name'),
                'id' => DB::table('users')->max('id') + 1,
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')), 
                'role' => $request->input('role'),
                'providers' => $provider,                
            ]);
            
            $new_users->save();
            
            return redirect('/register')->with('status', 'Kayıt Başarıyla tamamlandı');
            // Return the new user's ID
            return response()->json([
                'message' => 'Kayıt başarılı',
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Hata oluştu',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}