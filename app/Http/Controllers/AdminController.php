<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // --------------------------------logout--------------------------------------

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'You logged out  sucessfuly',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }
// --------------------------------profile---------------------------------------

    public function profile()
    {
        $id=Auth::User()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile_view', compact('adminData'));
    }
    public function editProfile()
    {
        $id=Auth::User()->id;
        $editData = User::find($id);

        return view('admin.admin_profile_edit', compact('editData'));
    }

    public function StoreProfile(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->username = $request->username;

        if ($request->file('profile_image')) {
           $file = $request->file('profile_image');

           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/admin_images'),$filename);
           $data['profile_image'] = $filename;
        }
        $data->save();
        $notification = array(
            'message' => 'Admin profile updated sucessfuly',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notification);

    }// End Method
// --------------------------------change password---------------------------------------
    public function changePassword(){

        return view('admin.admin_change_password');

    }

    public function UpdatePassword(Request $request){

        $validateData = $request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required',
            'confirm_password' => 'required|same:newpassword',
        ]);

        $hashpassword = auth::user()->password;
        if(Hash::check($request->oldpassword,$hashpassword))
        {
            $users = User::find(Auth::id());
            $users->password = bcrypt($request->newpassword);
            $users->save();

            $notification = array(
                'message' => 'Password changed sucessfuly',
                'alert-type' => 'success'
            );

            return redirect()->back()->with($notification);
        }
        else
        {
            $notification = array(
                'message' => 'old password doesnt match with the new password',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }
    }// End Method
}
