<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function create(){
        return view('profiles.create');
    }

    public function insert(Request $request){
        DB::table('profiles')->insert([
            'name'=>$request->name,
            'body'=>$request->body
        ]);

        return redirect()->route('profiles.show');
        
    }

    public function show(){
        $profiles = DB::table('profiles')->get();
        return view('profiles.show',compact('profiles'));
    } 

    public function edit($id){
       $profile = DB::table('profiles')->where('id',$id)->first();
       return view('profiles.edit',compact('profile'));
    }

    public function update(Request $request,$id){
        DB::table('profiles')->where('id',$id)->update([
            'name'=>$request->name,
            'body'=>$request->body
        ]);

        return redirect()->route('profiles.show');
    }

    public function delete($id){
        DB::table('profiles')->where('id',$id)->delete();
        return redirect()->route('profiles.show');
    }

    public function truncate(){
        DB::table('profiles')->truncate();
        return redirect()->route('profiles.show');
    }
    
}
