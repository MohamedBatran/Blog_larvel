<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    

    public function create(){
        return view('posts.create');
    }

    public function insert(Request $request){
        DB::table('posts')->insert([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category
        
        ]);
        return redirect()->route('posts.show');
    }

    public function show(){
        $posts = DB::table('posts')->get();
        return view('posts.show', compact('posts'));
    }

    public function edit($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request,$id){
        DB::table('posts')->where('id',$id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category

        ]);
        return redirect()->route('posts.show');
    }

    public function delete($id){
        DB::table('posts')->where('id',$id)->delete();
        return redirect()->route('posts.show');
    }

    public function truncate(){
        DB::table('posts')->truncate();
        return redirect()->route('posts.show');
    }
}

