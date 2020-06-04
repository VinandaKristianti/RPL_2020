<?php

namespace App\Http\Controllers;

use App\User;
use App\dosen_koor;
use Auth;
use Socialite;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class loginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }


    public function Callback(Request $request)
    {
        try 
        {
    
            $user = Socialite::driver('google')->stateless()->user();
     
            $finduser = User::where('google_id', $user->id)->first();
            
            $user_dosen = dosen_koor::where('google_id', $user->id)->first();
            if($finduser)
            {
     
                Auth::login($finduser);
    
                return redirect('/Mahasiswa');
     
            }
            elseif($user_dosen)
            {
                Auth::guard('dosen')->loginUsingId($user_dosen->id, true);
                return redirect('/ProfilDosen');
            }
            else
            {
                if(Str::endsWith($user->email, "@si.ukdw.ac.id"))
                {
                $newUser = User::create([
                    'nama' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                ]);
    
                Auth::login($newUser);
     
                return redirect('/Mahasiswa');
                }
                elseif(Str::endsWith($user->email, "@gmail.com"))
                {

                    $userDosen = dosen_koor::create([
                        'nama_dos' => $user->name,
                        'email' => $user->email,
                        'google_id'=> $user->id,
                    ]);
        
                    Auth::guard('dosen')->loginUsingId($userDosen->id, true);
                    return redirect('/ProfilDosen');
                }
            }
    
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
    public function logout(Request $request)
    {
        Auth::guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/');
    }
}


