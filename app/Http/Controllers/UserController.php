<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function store(Request $request){
        $user = new Users;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->isadmin = $request->input('isdamin');
        $user->save();
        Log::channel('autogear_log')->info("user who has ".$request->input('email')." added succesfully");
        return response()->json([
            'status'=> 201,
            'msg'=>'user added succesfully!, Please try to login.',
        ]);
    }
    
    public function auth(Request $request){
        $user = new Users;

        if($data = $user::where("email",$request->email)->first()){
            if($data->password == $request->password){
                Log::channel('autogear_log')->info("User who has id ".$data->id." is login");
                return $data;
            }else{
                Log::channel('autogear_log')->info("User can not login");
                return response()->json([
                    'status'=> 400,
                    'msg'=>'Your email or password is incorrect',
                ]);
            }
        }else{
            Log::channel('autogear_log')->info("User can not login");
            return response()->json([
                'status'=> 400,
                'msg'=>'Your email or password is incorrect',
            ]);
        }
    }
}
