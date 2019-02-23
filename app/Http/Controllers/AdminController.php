<?php

namespace App\Http\Controllers;

use App\RegisteredUsers;
use Illuminate\Http\Request;
use\Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use \DB;
use App\User;
use\Hash;

class AdminController extends Controller
{
    public function signin(Request $request)
    {
        if(Auth::attempt(['username'=> $request['username'],'password'=>$request['password']]))
        {
            return redirect()->action('AdminController@AdminHome');
        }
        return redirect()->back()->with('message','login failed');
    }

    public function logout(Request $request) {
        Auth::logout();
        session::flush();
        return redirect()->action('UserController@Login');
    }

    public function AdminHome(){
        return view('Admin/admin_home');
    }
    public function Settings(){
        $get_user_information = User::all();
        $username=Auth::user()->username;
        $userData = User::where('username','=',$username)->get();
        return view('Admin/settings')
            ->with(compact('userData',$userData))
            ->with(compact('get_user_information',$get_user_information));

    }

    public function Job(){
        return view('Admin/job');
    }



    public function job_seekers_find(){
        $date = Input::get('date');
        $start_time = Input::get('start_time');
        $end_time = Input::get('end_time');

       if ($date == 'Monday'){
            $count = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport')->count();
            $data = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('mon_t_from','=',$start_time)
                ->where('mon_t_to','=',$end_time)
                ->paginate($count);
                return view( 'Admin/job')
                    ->with(compact('data',$data));
            }elseif ($date == 'Tuesday'){
           $count = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
           $data = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('tue_t_from','=',$start_time)
                ->where('tue_t_to','<=',$end_time)
                ->paginate($count);

           return view( 'Admin/job')
               ->with(compact('data',$data));

            }elseif ($date == 'Wednesday'){
            $count = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('wed_t_from','=',$start_time)
                ->where('wed_t_to','=',$end_time)
                ->paginate($count);

           return view( 'Admin/job')
               ->with(compact('data',$data));

        }elseif ($date == 'Thursday'){
           $count = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('thu_t_from','=',$start_time)
                ->where('thu_t_to','=',$end_time)
                ->paginate($count);
           return view( 'Admin/job')
               ->with(compact('data',$data));
        }elseif ($date == 'Friday'){
           $count = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('fri_t_from','=',$start_time)
                ->where('fri_t_to','=',$end_time)
                ->paginate($count);
           return view( 'Admin/job')
               ->with(compact('data',$data));
        }elseif ($date == 'Saturday') {
           $count = DB::table('registerd_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
           $data = DB::table('registerd_users')->select('name', 'email', 'mobile_number', 'visa_states', 'address', 'transport')
               ->where('sat_t_from', '=', $start_time)
               ->where('sat_t_to', '=', $end_time)
               ->paginate($count);
           return view('Admin/job')
               ->with(compact('data', $data));
       }
            else{
                return redirect()->back()->with('status','no data find');
            }
        }

    public function job_seekers_find_applied(){
        $date = Input::get('date');
        $start_time = Input::get('start_time');
        $end_time = Input::get('end_time');

        if ($date == 'Monday'){
            $count = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport')->count();
            $data_applied = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('mon_t_from','=',$start_time)
                ->where('mon_t_to','=',$end_time)
                ->paginate($count);
            return view( 'Admin/job')
                ->with(compact('data_applied',$data_applied));
        }elseif ($date == 'Tuesday'){
            $count = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data_applied = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('tue_t_from','=',$start_time)
                ->where('tue_t_to','<=',$end_time)
                ->paginate($count);

            return view( 'Admin/job')
                ->with(compact('data_applied',$data_applied));

        }elseif ($date == 'Wednesday'){
            $count = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data_applied = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('wed_t_from','=',$start_time)
                ->where('wed_t_to','=',$end_time)
                ->paginate($count);

            return view( 'Admin/job')
                ->with(compact('data_applied',$data_applied));

        }elseif ($date == 'Thursday'){
            $count = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data_applied = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('thu_t_from','=',$start_time)
                ->where('thu_t_to','=',$end_time)
                ->paginate($count);
            return view( 'Admin/job')
                ->with(compact('data_applied',$data_applied));
        }elseif ($date == 'Friday'){
            $count = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data_applied = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport')
                ->where('fri_t_from','=',$start_time)
                ->where('fri_t_to','=',$end_time)
                ->paginate($count);
            return view( 'Admin/job')
                ->with(compact('data_applied',$data_applied));
        }elseif ($date == 'Saturday') {
            $count = DB::table('applied_users')->select('name','email','mobile_number','visa_states','address','transport') ->count();
            $data_applied = DB::table('applied_users')->select('name', 'email', 'mobile_number', 'visa_states', 'address', 'transport')
                ->where('sat_t_from', '=', $start_time)
                ->where('sat_t_to', '=', $end_time)
                ->paginate($count);
            return view('Admin/job')
                ->with(compact('data_applied',$data_applied));
        }
        else{
            return redirect()->back()->with('status','no data find');
        }
    }

    public function EditUserSettings(Request $request){
//        $this->validate($request, [
////            'title' => 'required|unique:posts|max:255',
//            'username' => 'required|unique:users'
//        ]);

        $username=Auth::user()->username;
        $newusername = Input::get('username');

        User::where('username','=',$username)->update([
            'username'  =>  $newusername
        ]);
        return redirect()->back()->with('update_user','Updated');
    }

    public function updatePassword(Request $request){
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Failed. The old password doesn't match.");
        }
        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Password confirmation failed");
        }
        $this->validate($request, [
            'current-password' => 'required',
            'new-password' => 'required|string|min:6|confirmed',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();
        return redirect()->back()->with("success","Password successfully updated!");
    }
}
