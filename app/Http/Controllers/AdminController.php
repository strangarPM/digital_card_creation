<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\admins;   
use Illuminate\Support\Facades\Request AS Input;
use DB;
use Auth;
use Log;

class AdminController extends Controller
{
    public function doLogin(Request $request_body) {


        try {

            
            // $request = json_decode($request_body->get_contents());
            $request = json_decode($request_body->getContent());

            
            if(Auth::guard('admin')->attempt(['email' => $request->email_id, 'password' =>$request->password])){
                       
                $admin = admins::where('email' ,$request->email_id)->first();
                $token = $admin->createToken('MyAuthApp')->plainTextToken;
                $response = Response::json(array('code' => 200, 'message' => 'Login successfully.', 'cause' => '', 'data' => ['token' => $token]));
            } else {
                $response = Response::json(array('code' => 201, 'message' => 'Unable to Login.', 'cause' => '', 'data' => json_decode('{}')));
            };


        } catch(Exception $e) {

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to Login.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));

        }

        return $response;

    }

    public function getAllReportByAdmin(Request $request_body) {
        try {

            $request = json_decode($request_body->getContent());


            $total_card = DB::select('SELECT COUNT(*) AS total FROM user_cards');

            $report = array(
                'total_card' => $total_card[0]->total,
            );

            $response = Response::json(array('code'=> 200, 'message' => 'Report fetch successfully.', 'cause' => '', 'data' => $report));

        } catch(Exception $e) {

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to get report.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));

        }

        return $response;
    }


    public function doLogout(Request $request_body) {

        try {

            auth()->guard('admin')->logout();
            $request_body->session()->invalidate();

            $response = Response::json(array('code'=> 200, 'message' => 'Logout successfully.', 'cause' => '', 'data' => json_decode('{}')));

        } catch(Exception $e) {

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to get report.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));
            

        }

        return $response;


    }

    public function getUserList(Request $request_body) {
        try {

            // $request = json_decode($request_body->get_contents());
            $request = $request_body;

            $users = DB::select('SELECT id, name, email, mobile, payment_status FROM users ORDER BY id DESC');

            if(count($users) > 0) {

                $response = Response::json(array('code'=> 200, 'message' => 'User List Fechted.', 'cause' => '', 'data' => array('users' => $users)));
                
            } else {
                $response = Response::json(array('code'=> 201, 'message' => 'No Users Found.', 'cause' => '', 'data' => json_decode('{}')));
            }

        }  catch(Exception $e) {

            Log::error('getUserList',['error' => $e->getMessage()]);

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to get users.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));
            

        }

        return $response;
    }

    public function updatePaymentStatus(Request $request_body) {
        try {

            // $request = json_decode($request_body->get_contents());
            $request = $request_body;
            $status = $request->status;
            $user_id = $request->id;

            DB::beginTransaction();
            DB::update('UPDATE users SET payment_status='.$status.' WHERE id='.$user_id);
            DB::commit();

            $response = Response::json(array('code'=> 200, 'message' => 'Status update successfully.', 'cause' => '', 'data' => json_decode('{}')));
            

        } catch(Exception $e) {

            DB::rollback();
            Log::error('updatePaymentStatus',['error' => $e->getMessage()]);
            $response = Response::json(array('code'=> 201, 'message' => 'Unable Update the Status.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));
            

        }

        return $response;
    }
}
