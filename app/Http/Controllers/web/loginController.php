<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\User;   
use Illuminate\Support\Facades\Request AS Input;
use DB;
use Log;

class loginController extends Controller
{
    public function doRegister(Request $request_body) { 

        try {
            $request = $request_body;

            $email = $request->email;

            //check the email is exists or not
            $is_exists = DB::select('SELECT id FROM users WHERE email="'.$email.'"');

            if(count($is_exists) == 0) {

                $user = new User;
                $user->name = $request->name;
                $user->email = $request->email;
                $user->mobile = $request->mobile;
                $user->password = bcrypt($request->password);
                $user->save();

                $token = $user->createToken('MyAuthApp')->plainTextToken;

                $response =  Response::json(array('code'=> 200, 'message' => 'Register successfully.', 'cause' => "", 'data' => array('token' => $token)));

            } else {
                $response = Response::json(array('code'=> 201, 'message' => 'Email is already exists.', 'cause' => "", 'data' => json_decode('{}')));
            }

        } catch(Exception $e) {

            Log::error('doRegister',['error' => $e->getMessage()]);

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to Login.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));

        }

        return $response;

    }

    public function doLogin(Request $request_body) {
        try {

            $request = $request_body;

            $email = $request->email;
            $user = User::where('email',$request->email)->first();

            if(!empty($user)) {

                $checkPass = [
                    'email'=>$request->email,
                    'password'=>$request->password,
                ];

                if(auth()->attempt($checkPass)){
                    $token = $user->createToken('MyAuthApp')->plainTextToken;

                    $response = Response::json(array('code'=> 200, 'message' => 'Login successfully.', 'cause' => "", 'data' => array('token' => $token)));
                } else {
                    $response = Response::json(array('code'=> 201, 'message' => 'Unable to login.', 'cause' => "", 'data' => json_decode('{}')));
                }

            } else {
                $response = Response::json(array('code'=> 201, 'message' => 'User not found.', 'cause' => "", 'data' => json_decode('{}')));
            }

        } catch(Exception $e) {

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to Login.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));

        }

        return $response;
    }
}
