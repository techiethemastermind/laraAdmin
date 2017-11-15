<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use App\User;

class AccountsController extends Controller
{
    public function __construct() {

        // View Share
        view()->share('user_type', 'SuperAdmin');
        view()->share('page_active', 'accounts');
    }
    
    // Share User Data
    public function shareUserData() {

        $user_id = Auth::user()->id;
        $data = User::find($user_id);
        view()->share('data', $data);
    }

    // Account
    public function index() {

        $this->shareUserData();

        // Get Accounts
        $admins = User::where('type', '=', '1')->get();
        $mentors = User::where('type', '=', '2')->get();
        $traders = User::where('type', '=', '3')->get();
        $webmasters = User::where('type', '=', '4')->get();

        return view('super_admin.accounts', compact('admins', 'mentors', 'traders', 'webmasters'));
    }

    public function action($action, $user_id, Request $request) {

        if ($action === 'ev') {  //Edit view

            $data = User::find($user_id);
            return view('super_admin.editaccount', compact('data'));

        } elseif ($action === 'es') {    // Edit save

            $names = explode(' ', $request->fullname);
            $updated_at = date('y-m-d h:i:s');
            $rlt = User::whereId($user_id)->update([
                'email'     => $request->email,
                'firstname'  => $names[0],
                'lastname'   => $names[1],
                'password'   => bcrypt($request->password),
                'type'       => $request->type,
                'gender'     => $request->gender,
                'phone'      => $request->phone,
                'updated_at' => $updated_at
            ]);

            if ($rlt === 1) {
                return redirect('/s0/accounts/ev/'.$user_id);
            }

        } elseif ($action === 'cn') {   // Create View

            $names = explode(' ', $request->fullname);
            $created_at = date('y-m-d h:i:s');

            $last_id = User::insertGetId([
                'name'      => $names[0],
                'email'     => $request->email,
                'firstname' => $names[0],
                'lastname'  => $names[1],
                'password'  => bcrypt($request->password),
                'type'      => $request->type,
                'gender'    => $request->gender,
                'phone'     => $request->phone,
                'avatar'    => 'male_avatar_80.png',
                'created_at' => $created_at
            ]);
            
            if ($last_id) {
                return redirect('/s0/accounts');
            }
        } elseif ($action === 'd') {

            $rlt = User::find($user_id)->delete();

            if ($rlt) {
                return redirect('/s0/accounts');
            }
        }
    }
}
