<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }

    public function insert(Request $request){
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('users.show');
    }

    public function show(){
        $users = DB::table('users')->get();
        return view('users.show', compact('users'));
    }

    public function edit($id){
        $user = DB::table('users')->where('id', $id)->first();
        return view('users.edit', compact('user'));
    }

    public function update(Request $request,$id){
        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect()->route('users.show');
    }

    public function delete($id){
        DB::table('users')->where('id', $id)->delete();
        return redirect()->route('users.show');
    }

    public function truncate(){
        DB::table('users')->truncate();
        return redirect()->route('users.show');
    }
}
