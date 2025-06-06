<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
// use Illuminate\Support\Collection\list;

class UserController extends Controller
{
    public function show(){
        $users = DB::table('users')
                    ->orderBy('id')
                    ->cursorPaginate(3);            
        
        
        
        // ->Paginate(2);
                    // ->fragment('students');  it send a # value in url
                    // ->appends(['sort'=>'votes']);   this is for extra information in url 

        // ->Paginate(2,['*'],'ashok');
                    // ->where('name','LIKE','m%')
                    // ->where('age','>',18)
                    // ->get();   don't use this with pagination
       
                    // return $users;
        return view('alluser',['data'=>$users]);
        

    // foreach($users as $user){
    //     echo $user->name . "<br>";
    // }
        
        // return $users;
    //  dd($users);  //  debug information it just for testing purpose if we don't want to return data so we can use this
    }

    public function singleUser(string $id){
        $user = DB::table('users')->where('id',$id)->get();
        // return $user;
        return view('singleUser',['data'=>$user]);
    }

    public function addUser(Request $req){
        // $user =  DB::table('users')->insertOrIgnore(
        // return  $req;
       $user =  DB::table('users')
                             ->insert(
                              [
                                  'name'=>$req->username,
                                     'email'=>$req->useremail,
                                    'age'=>$req->userage,
                                   'city'=>$req->usercity 
                             ] 
                    );

                //  return $user;
        // dump($user);
        if($user){
                return redirect()->route('home');
        }else{
            echo "<h1>Data Failed</h1> <br> <a href=".route('home') .">Home</a>";
        }
    }
 
    public function getUser(string $id){
         $user = DB::table('users')->find($id);    // same as get() but it is short and return array not json 

        // $user = DB::table('users')->where('id',$id)->get();
                // ->decrement('age',5);
                // ->increment('age');
                // return $user;
        return view('updateUser',['data'=>$user]);
             
                // if($user){
                //     echo "<h1>Suceessfully update</h1>";
                // }else{
                //     echo "<h1>Failed update</h1>";
                // }
        
    
        //   $user = DB::table('users')
    //             ->updateOrInsert(
    //                     [
    //                         'name'=>'asho',
    //                         'email'=>'negiashok13@gmail.com',
    //                         // 'age'=>21,
    //                          'city'=>'ratuda'
    //                     ],
    //                     [
    //                         'age'=>99
    //                     ]   
    //             );
      
      
        // $user = DB::table('users')
        //             ->where('id',1)
        //             ->update([
        //                 'city'=>'pabo',
        //                 'age'=>19
        //             ]);
        //     if($user){
        //         echo "<h1>Data Successfully Update...</h1>";
        //     }else{
        //         echo "<h1>Please Enter Correct Id or Data.../....</h1>";
        //      }        
        }


                public function deleteUser(string $id){
                    $user = DB::table('users')
                            ->where('id',$id)
                            ->delete();
                    
                   if($user){
                   return redirect()->route('home');
                   }else{
                    echo "<script>alert('failed')</script>";
                   }
                 }

                 public function deleteAll(){
                    $users = DB::table('users')
                            ->truncate(); //  reset the id's

                          //  ->delete();    does't reset id   
                    if($users){
                        return redirect()->route('home');
                    }
        
                 }
                


            public function updateUser(request $req ){
            //    return $req;
                $user = DB::table('users')
                        ->where('id',$req->userid)
                        ->update([
                            'name'=> $req->username,
                            'age'=> $req->userage,
                            'email'=> $req->useremail,
                            'city'=> $req->usercity
                        ]);
                
                        if($user){
                            return redirect()->route('home');
                }else{
                    return "<script>alert('Failed to update')</script>";
                }

            }   

}
