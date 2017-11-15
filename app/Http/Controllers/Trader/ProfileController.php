<?php

namespace App\Http\Controllers\Trader;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class ProfileController extends Controller
{
    public function __construct() {
        // View Share
        view()->share('user_type', 'Trader');
        view()->share('page_active', 'profile');
    }

    // Share User Data
    public function shareUserData() {
        
        $user_id = Auth::user()->id;
        $data = User::find($user_id);
        view()->share('data', $data);
    }

    public function index() {

        $this->shareUserData();
        
        return view('trader.profile', compact('data'));
    }

    public function update(Request $request) {

        $user_id = Auth::user()->id;
        $names = explode(' ', $request->fullname);
        $lastname = '';
        for ($i=1; $i < count($names); $i++) {
            $lastname .= $names[$i];
        }
        $updated_at = date('y-m-d h:i:s');

        if ($request->hasFile('profileimage')) {
            $imageName = $request->profileimage->getClientOriginalName();
            $request->profileimage->move(
                base_path() . '/public/assets/img/profile/', $imageName
            );

            $rlt = User::whereId($user_id)->update([
                'name'      => $request->username,
                'email'     => $request->email,
                'firstname'  => $names[0],
                'lastname'   => $lastname,
                'password'   => bcrypt($request->password),
                'type'       => $request->type,
                'gender'     => $request->gender,
                'phone'      => $request->phone,
                'avatar'     => $imageName,
                'updated_at' => $updated_at
            ]);
        } else {
            $rlt = User::whereId($user_id)->update([
                'name'      => $request->username,
                'email'     => $request->email,
                'firstname'  => $names[0],
                'lastname'   => $lastname,
                'password'   => bcrypt($request->password),
                'type'       => $request->type,
                'gender'     => $request->gender,
                'phone'      => $request->phone,
                'updated_at' => $updated_at
            ]);
        }
        

        if ($rlt === 1) {
            return redirect('/t3/profile');
        }
    }
}
