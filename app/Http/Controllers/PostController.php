<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
class PostController extends Controller
{
    //

    public function create(){
        return view('post');
    }

    public function save(Request $request){
       $post=new post;
       $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return redirect(route('home'))->with('success','Your content has been posted');
    }
    public function posts(){
        $posts =post ::all();
        return view('welcome',compact('posts'));
    }


    public function edit($id){
      $post=post::find($id);

     return view('edit',compact('post'));
    }


    public function update(Request $request,$id){
        $post=post::find($id);
        $post->title=$request->title;
        $post->description=$request->description;
        $post->save();
        return redirect(route('home'))->with('success','Your content has been updated');


    }

    public function delete($id){

        $post=post::where('id',$id)->delete();
        return redirect(route('home'))->with('success','Your content has been Deleted');
    }
}
