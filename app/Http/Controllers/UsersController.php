<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function createUser(Request $request)
    {
        try {

            $validateUser = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);
            if ($validateUser->fails()) {
                return response()->json(['error' => $validateUser->errors()], 401);
            }
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json([
                'message' => 'User created successfully',
                'user' => $user,
                'token' => $user->createToken("API Token")->plainTextToken
            ],  201);
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 401);
        }
    }
    public function loginUser(Request $request)
    {
        try {
            $validateUser = Validator::make($request->all(), [

                'email' => 'required|email|exists:users,email',
                'password' => 'required'
            ]);
            if ($validateUser->fails()) {
                return response()->json(['error' => $validateUser->errors()], 401);
            }
            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'error' => 'Email and Password doesnt match'
                ], 401);
            }
            $user = User::where('email', $request->email)->first();
            return response()->json([
                'message' => 'User logged in successfully',
                'user' => $user,
                'token' => $user->createToken("API Token")->plainTextToken
            ], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
    }
}
