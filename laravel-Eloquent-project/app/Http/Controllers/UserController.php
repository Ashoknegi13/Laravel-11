<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::get();
                        // ->select('name','email as User Email')
                        
        
    // return $users;

        return view("home",compact('users'));
 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
     $req->validate([
                'useremail'=> 'email'
        ]);

       $user = new User;


       $user->name = $req->username;
       $user->age = $req->userage;
       $user->email = $req->useremail;
       $user->city = $req->usercity;

$user->save();

        return redirect()->route('user.index')->with('status','New User Add Successfullty..');

    }

    /**
     * Display the specified resource.
     */
    public function show(String  $id)
    {
         $stu = User::find($id);
        //  return $stu;
        return view('viewuser', compact('stu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
         $users = User::find($user->id);   
        //   return $users;
        return view('updateuser', compact('users'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req, String $id)
    {
        $req->validate([
            'username'=> 'required | alpha',
            'useremail'=> 'required |email',
            'userage'=> 'required |numeric',
            'usercity'=> 'required | alpha'
        ]); 

        $user = User::where('id',$id)
                        ->update([
                        'name'=> $req->username,
                        'email'=>$req->useremail,
                        'age'=>$req->userage,
                        'city'=>$req->usercity
                        ]);

        return redirect()->route('user.index')->with('status','Update Successfully');
      
        // $user->name = $req->username;
        // $user->email = $req->useremail;
        // $user->age = $req->userage;
        // $user->city = $req->usercity;

        // $user->save();



    } 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
