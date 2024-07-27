<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\User;   
use Illuminate\Support\Facades\Request AS Input;
use DB;
use Log;
use Carbon\Carbon;

class UserController extends Controller
{
    function checkUserPaymentStatus($id){
        try {

            $paymentStatus = DB::select('SELECT payment_status FROM users id = "?"',[$id]);

            if(count($paymentStatus) > 0) {
                $response = array('status' => $paymentStatus[0]->payment_status);
            } else {
                $response = array('status' => 0);
            }

        }catch(Exception $e) {
            Log::error('create_card',['user_id' => $id,'error' => $e->getMessage()]);
            $response = array('status' => 0);
        }

        return $response;
    }

    function generateShortId($length = 10) {
        // Generate a unique ID
        $uniqId = uniqid('', true);
    
        // Truncate to the desired length
        return substr(str_replace('.', '', $uniqId), 0, $length);
    }

    public static function upload(string $dir, string $format, $image = null)
    {
        if ($image != null) {
            $imageName = Carbon::now()->toDateString() . "-" . uniqid() . "." . $format;
            $path=public_path($dir);    
            $image->move($path,$imageName);
        } else {    
            $imageName = 'default.jpg';
        }
        return $imageName;
    }

    function create_card(Request $request_body) {
        try {

            $request = $request_body;
            $request->validate([
                'title' => 'required',
                'short_title' => 'required',
                'description' => 'required',
            ]);

            $title = $request->title;
            $short_title = $request->short_title;
            $description = $request->description;
            $card_features = isset($request->card_features) ? array_values($request->card_features) : [];
            $services = isset($request->services) ? array_values($request->services) : [];
            $yt = isset($request->yt_table) ? array_values($request->yt_table) : [];
            $user_id = auth()->user()->id;


            //Upload cover Image.
            if(count($services) > 0) {
                foreach ($services as &$service) { // Note the & to pass by reference
                    $img_name = $this->upload('upload/service_img/', 'png', $service['img']);
                    $service['img'] = $img_name; // Directly update the img key
                }
            }

            $cover_img_name=$this->upload('upload/cover_img/', 'png', $request->file('cover_img'));
            $logo_img_name=$this->upload('upload/logo_img/', 'png', $request->file('logo_img'));

            

            $uuid = $this->generateShortId();
            $db_insert = array(
                'uuid' => $uuid,
                'title' => $title,
                'short_title' => $short_title,
                'description' => $description,
                'cover_img' => $cover_img_name,
                'logo_img' => $logo_img_name,
                'card_features' => json_encode($card_features),
                'services' => json_encode($services),
                'yt' => json_encode($yt),
                'user_id' => $user_id
            );

            DB::beginTransaction();
            $id = DB::table('user_cards')->insertGetId($db_insert);
            DB::commit();

            $response = Response::json(array('code'=> 200, 'message' => 'Card created successfully.', 'cause' => '', 'data' => array('id' => $id)));

            

        } catch(Exception $e) {

            DB::rollback();
            Log::error('create_card',['error' => $e->getMessage()]);

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to add Card.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));

        }

        return $response;
    }

    function  delete_card(Request $request_body){

        try {

            $request = $request_body;
            $request->validate([
                'card_id' => 'required',
            ]);

            $card_id = $request->card_id;
            $user_id = auth()->user()->id;

            $is_exist = DB::select('SELECT id,cover_img, logo_img, services FROM user_cards WHERE user_id = "'.$user_id.'" AND uuid = "'.$card_id.'"');


            if(count($is_exist) > 0) {

                //DELETE the images


                foreach (json_decode($is_exist[0]->services, true) as $item) {
                    
                    if(isset($item['img'])){
                        unlink(public_path('upload/service_img/').'/'.$item['img']);
                    }
                }

                
                unlink(public_path('upload/logo_img/').'/'.$is_exist[0]->logo_img);
                unlink(public_path('upload/cover_img/').'/'.$is_exist[0]->cover_img);

                DB::beginTransaction();
                DB::delete('DELETE FROM user_cards WHERE user_id    ="'.$user_id.'" AND uuid="'.$card_id.'"');
                DB::commit();

                $response = Response::json(array('code' => 200, 'message' => 'Card Delete Successfully.', 'cause' => '', 'data' => json_decode('{}')));

            } else {
                Log::error('delete_card',['card_id' => $card_id, 'message' => 'Card Not Found For Delete.']);
                $response = Response::json(array('code'=> 201, 'message' => 'Card Not Found For Delete.', 'cause' => "", 'data' => json_decode('{}')));
            }

        } catch(Exception $e){
            DB::rollback();
            Log::error('delete_card',['error' => $e->getMessage()]);
            $response = Response::json(array('code'=> 201, 'message' => 'Unable to Delete Card.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));
        }

        return $response;

    }

    function card_list(Request $request_body) {
        try {

            $user_id = auth()->user()->id;
            
            $card_lists = DB::select('SELECT id, uuid, CONCAT("'.config('constants.LOGO_IMG_PATH').'/",logo_img) AS logo_img, title FROM user_cards WHERE user_id = '.$user_id.' ORDER BY id DESC');

            $response = Response::json(array('code' => 200, 'message' => 'card list fetched.', 'cause' => '', 'data' => array('cards' => $card_lists)));

        } catch(Exception $e) {
            Log::error('card_list',['error' => $e->getMessage()]);

            $response = Response::json(array('code'=> 201, 'message' => 'Unable to Fetch Card.', 'cause' => $e->getMessage(), 'data' => json_decode('{}')));
        }

        return $response;
    }

    function card_viewer($uuid) {
        try {
            
            $details_db = DB::select('SELECT * FROM user_cards WHERE uuid = "'.$uuid.'"');
            if(count($details_db) > 0) {
                $detail_db = $details_db[0];

                $details = array(
                    'title' => $detail_db->title,
                    'short_title' => $detail_db->short_title,
                    'description' => $detail_db->description,
                    'card_features' => json_decode($detail_db->card_features,true),
                    'services' => json_decode($detail_db->services,true),
                    'yt' => json_decode($detail_db->yt,true),
                    'cover_img' => config('constants.COVER_IMG_PATH').'/'.$detail_db->cover_img,
                    'logo_img' => config('constants.LOGO_IMG_PATH').'/'.$detail_db->logo_img,
                );

                return view('frontend.card-viewer',['details' => $details]);
            } else {
                abort(404);
            }

        } catch(Exception $e) {
            Log::error('create_card',['error' => $e->getMessage()]);
            abort(404);
        }
    }
}
