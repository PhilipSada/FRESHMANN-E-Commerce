<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Facades\JWTFactory;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Tymon\JWTAuth\Payload;
use Tymon\JWTAuth\JWT;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use App\User;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->json()->all(), [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        if($validator->fails()){
            return response()->json(['errors'=>$validator->errors()]);
        }

        $user = User::create([
            'firstname' => $request->json()->get('firstname'),
            'lastname'=>$request->json()->get('lastname'),
            'email' => $request->json()->get('email'),
            'password' => Hash::make($request->json()->get('password')),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json([
            'user'=>$user,
            'token'=>$token,
            'success'=>'Registration Successful, please login'
        ]);
    }
    public function login(Request $request){
      
        $credentials = $request->json()->all();
        $user = User::where('email', $request->json()->get('email'))->first();
        $success = "Login Successful";
        
        try{
            if(!$token = JWTAuth::attempt($credentials)){
                return response()->json(['login_error'=>'Invalid_credentials, please enter a valid email and password']);
            }
        }catch(JWTException $e){
            return response()->json(['error'=>'could_not_create_token'],500);
        }
        
        return response()->json(["token"=>$token, "user"=>$user,"success"=>$success]);
    }

    public function getAuthenticatedUser(){
        // $user = new User();
        // $authUser = JWTAuth::user();
        $user = JWTAuth::user();
        // try{
        //     if(!$user == JWTAuth::parseToken()->authenticate()){
        //         return response()->json(['user_not_found']);
        //     }

        // }catch(TokenExpiredException $e){
        //     return response()->json(['token_expired']);
        // }catch(TokenInvalidException $e){
        //     return response()->json(['token_expired']);
        // }catch(JWTException $e){
        //     return response()->json(['token_expired']);
        // }

        // return response()->json(compact('user','authUser'));
        return response()->json(compact('user'));
    }
}
