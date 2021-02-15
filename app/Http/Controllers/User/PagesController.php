<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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
}
