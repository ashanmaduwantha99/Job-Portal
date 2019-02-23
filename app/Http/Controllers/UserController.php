<?php

namespace App\Http\Controllers;

use App\AppliedUsers;
use App\RegisteredUsers;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\Session;
use \DB;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function home_index(){
        return view('Home/homeIndex');
    }

    public function Login(){
        return view('Home/login');
    }

    public function registerUserHome(){
        if (!isset($username)){
            return redirect()->back();
        }else{
            return view('Home/registers_home');
        }

    }

    public function appliersUserHome(){
        if (!isset($key)){
            return redirect()->back();
        }else{
            return view('Home/appliers_home');
        }

    }

    public function applyForm(Request $request){

        $this->validate($request,[
            'email'     =>  'unique:applied_users'
        ]);

        $name       = $request->input('name');
        $email      = $request->input('email');
        $mobile_number= $request->input('mobile_number');
        $visa_states= $request->input('visa_states');
        $address    = $request->input('address');
        $transport  = $request->input('transport');
        $mon_t_from = $request->input('mon_t_from');
        $mon_t_to   = $request->input('mon_t_to');
        $tue_t_from = $request->input('tue_t_from');
        $tue_t_to   = $request->input('tue_t_to');
        $wed_t_from = $request->input('wed_t_from');
        $wed_t_to   = $request->input('wed_t_to');
        $thu_t_from = $request->input('thu_t_from');
        $thu_t_to   = $request->input('thu_t_to');
        $fri_t_from = $request->input('fri_t_from');
        $fri_t_to   = $request->input('fri_t_to');
        $sat_t_from = $request->input('sat_t_from');
        $sat_t_to   = $request->input('sat_t_to');

        $save_to_applied_users = array([
            'name'       =>      $name,
            'email'      =>      $email,
            'mobile_number'=>    $mobile_number,
            'visa_states'=>      $visa_states,
            'address'    =>      $address,
            'transport'  =>      $transport,
            'mon_t_from' =>      $mon_t_from,
            'mon_t_to'   =>      $mon_t_to,
            'tue_t_from' =>      $tue_t_from,
            'tue_t_to'   =>      $tue_t_to,
            'wed_t_from' =>      $wed_t_from,
            'wed_t_to'   =>      $wed_t_to,
            'thu_t_from' =>      $thu_t_from,
            'thu_t_to'   =>      $thu_t_to,
            'fri_t_from' =>      $fri_t_from,
            'fri_t_to'   =>      $fri_t_to,
            'sat_t_from' =>      $sat_t_from,
            'sat_t_to'   =>      $sat_t_to,
        ]);

        DB::table('applied_users')->insert($save_to_applied_users);

        return redirect()->back()->with('applied_user_created','success');

    }

    public function regForm(Request $request){

        $this->validate($request,[
            'email'     =>  'unique:registerd_users',
            'username'  =>   'unique:registerd_users'
        ]);

        $name       = $request->input('name');
        $email      = $request->input('email');
        $mobile_number= $request->input('mobile_number');
        $visa_states= $request->input('visa_states');
        $address    = $request->input('address');
        $transport  = $request->input('transport');
        $mon_t_from = $request->input('mon_t_from');
        $mon_t_to   = $request->input('mon_t_to');
        $tue_t_from = $request->input('tue_t_from');
        $tue_t_to   = $request->input('tue_t_to');
        $wed_t_from = $request->input('wed_t_from');
        $wed_t_to   = $request->input('wed_t_to');
        $thu_t_from = $request->input('thu_t_from');
        $thu_t_to   = $request->input('thu_t_to');
        $fri_t_from = $request->input('fri_t_from');
        $fri_t_to   = $request->input('fri_t_to');
        $sat_t_from = $request->input('sat_t_from');
        $sat_t_to   = $request->input('sat_t_to');
        $username   = $request->input('username');
        $password   = $request->input('password');

        $md5pwd = md5($password);

        $save_to_applied_users = array([
            'name'       =>      $name,
            'email'      =>      $email,
            'mobile_number'=>    $mobile_number,
            'visa_states'=>      $visa_states,
            'address'    =>      $address,
            'transport'  =>      $transport,
            'mon_t_from' =>      $mon_t_from,
            'mon_t_to'   =>      $mon_t_to,
            'tue_t_from' =>      $tue_t_from,
            'tue_t_to'   =>      $tue_t_to,
            'wed_t_from' =>      $wed_t_from,
            'wed_t_to'   =>      $wed_t_to,
            'thu_t_from' =>      $thu_t_from,
            'thu_t_to'   =>      $thu_t_to,
            'fri_t_from' =>      $fri_t_from,
            'fri_t_to'   =>      $fri_t_to,
            'sat_t_from' =>      $sat_t_from,
            'sat_t_to'   =>      $sat_t_to,
            'username'   =>      $username,
            'password'   =>      $md5pwd
        ]);

        DB::table('registerd_users')->insert($save_to_applied_users);

        return redirect()->back()->with('registered_user_created','registered success..!');

    }

    public function regDetailChange(Request $request){
        $username   =   $request->input('username');
        $password   =   $request->input('password');

        $md5pwd = md5($password);

        $check_username_count =  DB::table('registerd_users')->select('username')->where('username','=',$username)->count();

        if($check_username_count==1){
            $check_username = DB::table('registerd_users')->select('username')->where('username','=',$username)->get();
            $check_username_to_string = strval($check_username[0]->username);

            if ($username==$check_username_to_string){
                $check_password = DB::table('registerd_users')->select('password')->where('username','=',$username)->get();
                $check_password_to_string = strval($check_password[0]->password);

                if ($md5pwd==$check_password_to_string){
                    $reg_user_details = RegisteredUsers::where('username','=',$username)->get();
                    //return redirect('registers_home',['username'=>$username])->with('status', 'Edit your Profile Here');
                    return view('Home/registers_home',['username'=>$username])
                        ->with(compact('reg_user_details',$reg_user_details));

                }else{
                    return redirect()->back()->with('login_faild','Password not matched..!');
                }
            }else{
                return redirect()->back()->with('login_faild','Username is not exists..!');
            }
        }else{
            return redirect()->back()->with('login_faild','Username is not exists..!');
        }


    }

    public function regFormUpdate(){
        $id = Input::get('id');
        $name = Input::get('name');
        $email = Input::get('email');
        $mobile_number = Input::get('mobile_number');
        $visa_states = Input::get('visa_states');
        $address = Input::get('address');
        $transport = Input::get('transport');

        RegisteredUsers::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'mobile_number'=>$mobile_number,
            'visa_states'=>$visa_states,
            'address'=>$address,
            'transport'=>$transport
        ]);
        return redirect('home')->with('reg_updated_success', 'updated');
    }

    public function regFormUpdateTime(){
        $id = Input::get('id');
        $mon_t_from = Input::get('mon_t_from');
        $mon_t_to   = Input::get('mon_t_to');
        $tue_t_from = Input::get('tue_t_from');;
        $tue_t_to   = Input::get('tue_t_to');
        $wed_t_from = Input::get('wed_t_from');
        $wed_t_to   = Input::get('wed_t_to');
        $thu_t_from = Input::get('thu_t_from');
        $thu_t_to   = Input::get('tue_t_from');
        $fri_t_from = Input::get('fri_t_from');
        $fri_t_to   = Input::get('fri_t_to');
        $sat_t_from = Input::get('sat_t_from');
        $sat_t_to   = Input::get('sat_t_to');

        RegisteredUsers::where('id','=',$id)->update([
            'mon_t_from' =>      $mon_t_from,
            'mon_t_to'   =>      $mon_t_to,
            'tue_t_from' =>      $tue_t_from,
            'tue_t_to'   =>      $tue_t_to,
            'wed_t_from' =>      $wed_t_from,
            'wed_t_to'   =>      $wed_t_to,
            'thu_t_from' =>      $thu_t_from,
            'thu_t_to'   =>      $thu_t_to,
            'fri_t_from' =>      $fri_t_from,
            'fri_t_to'   =>      $fri_t_to,
            'sat_t_from' =>      $sat_t_from,
            'sat_t_to'   =>      $sat_t_to
        ]);
        return redirect('home')->with('reg_updated_success', 'updated');
    }

    public function regFormUpdateUsername(){
        $id = Input::get('id');
        $username = Input::get('username');

        RegisteredUsers::where('id','=',$id)->update([
            'username' =>      $username
        ]);
        return redirect('home')->with('reg_updated_success', 'update you username');
    }

    public function regFormUpdatePassword(){
        $id = Input::get('id');
        $password = Input::get('password');
        $passwordmd5=md5($password);
        RegisteredUsers::where('id','=',$id)->update([
            'password' =>      $passwordmd5
        ]);
        return redirect('home')->with('reg_updated_success', 'update you password successfully');
    }

    public function logoutRegUser() {
        Auth::logout();
        session::flush();
        return redirect()->action('UserController@home_index');
    }

    public function applyDetailChange(Request $request){
        $email   =   $request->input('email');
        $mobile_number   =   $request->input('mobile_number');

        $check_email_count = DB::table('applied_users')->select('email')->where('email','=',$email)->count();

        if ($check_email_count==1){
            $check_email = DB::table('applied_users')->select('email')->where('email','=',$email)->get();
            $check_email_to_string = strval($check_email[0]->email);

            $check_mobile_number = DB::table('applied_users')->select('mobile_number')->where('email','=',$email)->get();
            $check_mobile_number_to_string = strval($check_mobile_number[0]->mobile_number);

            if($email==$check_email_to_string){
                if ($mobile_number==$check_mobile_number_to_string){
                    $app_user_details = AppliedUsers::where('email','=',$email)->get();
                    return view('Home/appliers_home')
                        ->with(compact('app_user_details',$app_user_details));
                }else{
                    return redirect()->back()->with('login_faild','Mobile Number is not matched..!');
                }
            }else{
                return redirect()->back()->with('login_faild','Email is not matched..!');
            }
        }else{
            return redirect()->back()->with('login_faild','no such applicant found..!');
        }

    }

    public function applyFormUpdate(){
        $id = Input::get('id');
        $name = Input::get('name');
        $email = Input::get('email');
        $mobile_number = Input::get('mobile_number');
        $visa_states = Input::get('visa_states');
        $address = Input::get('address');
        $transport = Input::get('transport');

        AppliedUsers::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'mobile_number'=>$mobile_number,
            'visa_states'=>$visa_states,
            'address'=>$address,
            'transport'=>$transport
        ]);
        return redirect('home')->with('apply_updated_success', 'Details updated');
    }

    public function applyFormUpdateTime(){
        $id = Input::get('id');
        $mon_t_from = Input::get('mon_t_from');
        $mon_t_to   = Input::get('mon_t_to');
        $tue_t_from = Input::get('tue_t_from');;
        $tue_t_to   = Input::get('tue_t_to');
        $wed_t_from = Input::get('wed_t_from');
        $wed_t_to   = Input::get('wed_t_to');
        $thu_t_from = Input::get('thu_t_from');
        $thu_t_to   = Input::get('tue_t_from');
        $fri_t_from = Input::get('fri_t_from');
        $fri_t_to   = Input::get('fri_t_to');
        $sat_t_from = Input::get('sat_t_from');
        $sat_t_to   = Input::get('sat_t_to');

        AppliedUsers::where('id','=',$id)->update([
            'mon_t_from' =>      $mon_t_from,
            'mon_t_to'   =>      $mon_t_to,
            'tue_t_from' =>      $tue_t_from,
            'tue_t_to'   =>      $tue_t_to,
            'wed_t_from' =>      $wed_t_from,
            'wed_t_to'   =>      $wed_t_to,
            'thu_t_from' =>      $thu_t_from,
            'thu_t_to'   =>      $thu_t_to,
            'fri_t_from' =>      $fri_t_from,
            'fri_t_to'   =>      $fri_t_to,
            'sat_t_from' =>      $sat_t_from,
            'sat_t_to'   =>      $sat_t_to
        ]);
        return redirect('home')->with('apply_updated_success', 'Working Time updated');
    }

    public function logoutApplyUser() {
        return redirect()->action('UserController@home_index');
    }

}
