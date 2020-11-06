<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except('show');

    }


    public function index(Request $request){
        return view('admin.index', ['posts' => Post::all()->toArray()]);
    }


    
    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'body'  => 'required',
            'category_id' => 'required' 
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $filename = Post::save_image($request->image);

        $request= array_merge($request->all(),[
            "image" => $filename,
        ]);

        Post::create($request);
        
        return redirect()->back()
                ->withSuccess("Added successfully!")
                ->withInput();
    }


    public function edit($id){
       
        return view('admin.edit-post', ['post' => Post::find($id), 'categories' => Category::all()]);
    }


    public function create(){
        return view('admin.add-post', ['categories' => Category::all()]);
    }

    public function destroy($id){
      $post = Post::find($id);
      $post->delete_image($post->image);
      $post->delete();
      return redirect()->back()
                ->withSuccess("Deleted successfully!")
                ->withInput();
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required' 
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        if($request->image){
            Post::delete_image(Post::find($id)->image);
            $filename = Post::save_image($request->image);
        }else{
            $filename = Post::find($id)->image;
        }

        $request= array_merge($request->all(),[
            "image" => $filename,
        ]);

        Post::find($id)->update($request);
        
        return redirect()->back()
                ->withSuccess("Updated successfully!")
                ->withInput();
    }
   

}
