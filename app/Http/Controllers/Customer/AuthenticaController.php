<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthenticaController extends Controller
{
    public function checkLogin(Request $request)
    {
        $credentinal = $request->all();
        $user = user::where('email',$credentinal['email'])->first();
        $pwd = $user->password;
        // dd($pwd);
        if($user){
            $checkpassword = Hash::check($credentinal['password'], $user->password);
            if($checkpassword){
                // $user = $user->toArray();
                // $user['password'] = $pwd;
                
                // dd($user);
                Auth::login($user);
                // dd(Auth::user());
                return redirect('/home');
            }
            else
            {
                return back()->with('error',"Sai mat khau");
            }
        }
        else
        {
            return back()->with('error',"Tai khoan khong ton");
        }
        
        // $user = User::where('email',$credentinal['email'])->where('password',$credentinal['password'])->first();
        // if($user){
        //     return redirect('/home');
        // }
        // else
        // {
        //     return back()->with('error',"Deo dang nhap duoc");
        // }
    }
    public function register(Request $request)
    {
        $credentinal = $request->all();
        if($credentinal['password']!=$credentinal['confirm_password'])return back()->with('error','Xac nha nmat khau khong dung');
        $user = User::where('email',$credentinal['email'])->first();
        if($user){
            return back()->with('error',"Tai khoan da ton tai");
        }
        else
        {
            // dd($credentinal);
            $credentinal['password'] = Hash::make($credentinal['password']);
            // dd($credentinal);
            
            $user = User::create($credentinal);
            
            Auth::login($user);
            return redirect('/home');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }
}
