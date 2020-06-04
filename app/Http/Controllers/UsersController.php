<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ChangePasswordRequest;
use Auth;
use Hash;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('users.show',compact('user'));

    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request,User $user)
    {
        $this->authorize('update',$user);
        $user->update($request->all());
        return redirect()->route('users.show',$user->id);
    }

    public function __construct()
    {
        $this->middleware('auth',['except'=>['show']]);
    }

    public function password()
    {
        return view('users.password');
    }

    public function change(ChangePasswordRequest $request,User $user)
   {
        $id = Auth::user()->id;
        $oldpassword = $request->oldpassword;
        dd ($oldpassword);
        $newpassword = $request->password;
        
        if(!Hash::check($oldpassword, $user->password)){
            echo 2;
            exit;//
        }
        $update = array(
          'password'  =>bcrypt($newpassword),
        );
        $result = User::where('id',$id)->update($update);
        if($result){
            echo 1;exit;
        }else{
            echo 3;exit;
        }
    
    }


}
