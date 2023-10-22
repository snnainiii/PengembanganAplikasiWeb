<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    // TAMPILAN LOGIN
    public function login()
    {
        return view('login');
    }
    
    // TAMPILAN REGISTER
    public function register()
    {
        return view('register');
    }
    
    //  AUTHENTICATING
    public function authenticating(Request $request)
    {
        // validasi form
        $credentials = $request -> validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        
        // cek apakah login valid?
        if (Auth::attempt($credentials)) {
            
            // jika user tidak aktif
            if(Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                
                // akan ditampilkan flash message
                Session::flash('status','failed');
                Session::flash('message','Your account is not active yet. Please contact admin!');
                return redirect('/login');
            } 
            
            // jika usernya admin = dashboard
            $request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('/dashboard');
            }
            
            // jika usernya client = profile
            if(Auth::user()->role_id == 2){
                return redirect('/profile');
            }
            
        } 

        // tidak login sama sekali ditampilkan flash message
        Session::flash('status','failed');
        Session::flash('message','Login Invalid');
        return redirect('/login');
    }
    
    // lOGOUT
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }

    // REGISTER
    public function registerProcess(Request $request)
    {   
        // validasi form
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'phone' => 'max:255',
            'address' => 'required',
        ]);
        
        // membuat password menjadi rahasia
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());
        
        // tampilan flash message
        Session::flash('status','failed');
        Session::flash('message','Regist Succes. Wait admin for approval');
        return redirect('register');
    }
    
    

}