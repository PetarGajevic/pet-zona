<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\Models\Post;
use App\Models\Tag;

use App\Models\Category;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin')->except(['show','category']);

    }


    public function index(Request $request){
        return view('admin.index', ['posts' => Post::all()->toArray()]);
    }


    public function store(Request $request){
        $validator = Validator::make($request->all(), [
          //  'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'body'  => 'required',
            'category_id' => 'required' 
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
/* if($request->hasFile('image')){


        $filename = Post::save_image($request->image);

        $request= array_merge($request->all(),[
            "image" => $filename,
        ]);
    } */
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category_id = $request->input('category_id');
        $post->save();

        $post->tags()->sync((array)$request->tag);

        return redirect()->back()
                ->withSuccess("Added successfully!")
                ->withInput();
    }


    public function edit($id){
       
        return view('admin.edit-post', ['post' => Post::find($id), 'categories' => Category::all()]);
    }


    public function create(){
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.add-post', compact('tags','categories'));
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

    public function show(Request $request, Post $post){
        $categories = Category::all();
        $posts= Post::all();
        $tagsA = Tag::get()->pluck('name', 'id');
        $tags = $post->tags()->get();
        return view("show",compact('post','posts','categories','tagsA','tags'));
    }
    public function category($id){
        $tags = Tag::all();

        $posts = Post::where('category_id','=',$id)->get();
        $categories = Category::all();
        return view('blog',compact('posts','categories','tags'));
    }

    public function sendEmail(Request $request)
    {

        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return view('about')->with(['message' => 'Email successfully sent!']);
    }
   

}
