<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function store(Request $request){
        $skill=$request->php.",".$request->mysql.",".$request->laravel.",".$request->node_js;
if ($request->pass==$request->cpass) {

   $string=DB::table('table_singh')->insert([
       'role'=>$request->role,
       'fname'=>$request->firstname,
       'lname'=>$request->lastname,
       'email'=>$request->email,
       'mobile'=>$request->mobile,
       'skill'=>$skill,
       'gender'=>$request->gender,
       'aadharno'=>$request->aadhar,
       'aadharfile'=>$request->file('uploadaadhar')->store('docs'),
       'attachment'=>$request->file('uploadcer')->store('doc'),
       'password'=>$request->pass,

   ]);
   return redirect('/login');
} 
else {
    return redirect('/');
}

    }

    public function show(){
      $user=DB::table('table_singh')->get();
      return view('showdata',['users'=>$user]); 
    }
    public function destroy($id) {
        DB::delete('delete from table_singh where id = ?',[$id]);
        return redirect('/showdata');
     }
     public function edit($id)
     {
         $data =  DB::table('table_singh')->find($id);
         return view('update', compact('data'));
     }
     public function singh(Request $request,$id)
     {
        $data = DB::table('table_singh')->where('id',$id)->update(
            [
             'fname'=>$request->firstname,
             'lname'=>$request->lastname,
             'email'=>$request->email,
             'mobile'=>$request->mobile,
             'aadharno'=>$request->aadharno,
             'password'=>$request->pass,
            ]);
        
        
       return redirect('/showdata');
     }

     public function login(Request $request){
      $email=$request->email;
     $users=DB::table('table_singh')->get();
     foreach($users as $data)
     {
       $a = $request->email==$data->email;
       $b = $request->pass==$data->password;
       if(($a==$b))
       {
        if($data->role=='admin')
        {
            return view('showdata',['users'=>$users]);
        }
        else
        {
            
        }
       
       }
    }
     
     }

         
     
    
    
}
