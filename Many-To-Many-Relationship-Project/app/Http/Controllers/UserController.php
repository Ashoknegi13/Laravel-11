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
        $users = User::with('role')->get();
        // return $users;

            foreach($users as $user){
                echo $user->name ."<br>";
                echo $user->email. "<br>";
                echo "<b>Role :  </b>";
                foreach($user->role as $roles){
                    echo "<b>".$roles->role_name."</b><br>";
                }
                echo "<hr>";
            
            }


    //    echo "Name :<b>".$user->name."<br><br>Roles : </b><br>";  
    //     foreach($user->role as $roles){
    //         echo $roles->role_name ."<br>";
    //         // echo  $roles->role->role_name ."<br>";
    //     }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::find(3);
        //  $user->role()->attach(1);

        // $user->role()->detach([4,4]);
        
        $user->role()->sync(3);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
