<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::latest()->get();
        $users->transform(function($user){
            $user->role=$user->getRoleNames()->first();
            return $user;
        });
        return view('control.user.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('control.user.create',['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         $this->validate($request,[
            'name'=>'required|string',
            'password'=>'required|alpha_num|min:6',
            'role'=>'required',
            'email'=>'required|email|unique:users'
    ]);

    $user=new User();
    $user->name=$request->name;
    $user->email=$request->email;
    $user->phone=$request->phone;
    $user->password=bcrypt($user->password);

    $user->assignRole($request->role);

    $user->save();

    return redirect(route('user.index'))->with('user_created','User Berhasil Di Buat');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    public function getUserById($id){

        $userd=User::findOrFail($id);
        // $userd->permissions=$userd->getPermissionsViaRoles();
        // $userd->permissions=$userd->getDirectPermissions();
        // $userd->getRoleNames()->first();
        $userd->permissions=$userd->getAllPermissions();
        // $userd->roles->first();
// dd($userd);
        return response()->json($userd);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //user defined func
    public function profile(){
        return view('control.profile');
    }
    //post profile
    public function postprofile(Request $request){
        $user=auth()->user();
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email|unique:users,email,'.$user->id,
        ]);
        $user->update($request->all());
        // dd($user);
        return redirect()->back()->with('profile_updated','Profile Successfully Updated');
    }
}
