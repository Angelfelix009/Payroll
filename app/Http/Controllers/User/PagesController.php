<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ChangeProfilePictureRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PagesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function change_role(Request $request){
        $this->validate($request,[
            'id'=>'required',
            'user_role'=>'required',
        ]);
        $data = User::findorfail($request->input('id'));
        $data->role_id=$request->input('user_role');
        $data->save();
        return redirect()->to('/user')->with('success','Role Changed Successfully');
    }
    public function change_password(){
        return view('user.change-password');
    }
    public function update_password(ChangePasswordRequest $request){
        $id = Auth::user()->id;
        $password = Auth::user()->password;
        if (Hash::check($request['old_password'], $password)) {
            $user = User::find($id);
            $user->password = Hash::make($request['password']);
            $data = $user->save();
            if ($data == true) {
                return redirect()->route('login')->with('success', 'Password Changed Successfully');
            }
        } else {
            return back()->with('error', 'Please enter correct current password');
        }
    }
    public function change_picture(){
        return view('user.change-picture');
    }
    public function update_picture(ChangeProfilePictureRequest $request){
        $id=Auth::user()->id;
        //get file name with extension
        $fileNameWithExt=$request->file('picture')->getClientOriginalName();
        //get file name
        $filname=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        //get extension
        $extension = $request->file('picture')->getClientOriginalExtension();
        //file name to store
        $fileNameToStore=$filname.'_'.time().'.'.$extension;
        $user = User::findorfail($id);
        $user->profile_photo_path=$fileNameToStore;
        $save = $user->save();
        if($save==true){
            $path = $request->file('picture')->storeAs('public/user/'.$id.'/', $fileNameToStore);
            if($path){
                return redirect()->route('dashboard')->with('success','Account Profile Picture Updated');
            }
        }
    }
}
