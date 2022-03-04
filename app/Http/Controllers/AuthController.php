<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Models\User;

class AuthController extends Controller
{   
    public function signuplayout()
    {
        return view('components/signup');
    }
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|unique:users',
            'password' => 'required|string'
        ]);
        
        if ($validator->fails()) {
            
            return redirect()->route('signuplayout')->with('faild','Please enter your name and password');
        }
        $user =  User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('main_board');
      
        
    }


    public function loginlayout()
    {
  
        return view('components/login');
    }
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'password' => 'required|string'
        ]);
        
        if ($validator->fails()) {

            return redirect()->route('loginlayout')->with('faild','Please enter your name and password');
        }
        $credentials = request(['name', 'password']);
        if(!Auth::attempt($credentials))
        return redirect()->route('loginlayout')->with('faild','Unauthorized');
        
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        return redirect()->route('home')->with([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
           
        ]);
    }
}
