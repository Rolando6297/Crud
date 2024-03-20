<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\PutRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return route("post.create");
        //return redirect("post/create");
        //return redirect()->route("post.create");
        //return to_route("post.create");
   
        $posts = Post::paginate(3);
        return view('dashboard.post.index', compact("posts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $post =new Post();
       // $categories = Category::get();
        $categories = Category::pluck('id','title');
  
       echo view("dashboard.post.create", compact('categories', 'post'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        //dd($request);
        //"));
        //$validate =$request->validate(
          //  [
            //    "title" => "required | min:5 | max:500",
              //  "slug" => "required | min:5 | max:500",
              //  "content" => "required | min:7",
              //  "category_id" => "required | integer ",
             //   "posted" => "required",
           // ]
        //);
        //echo request("title");
        //echo $request->input('slug');
       // $data = $request->validated();
        //$data['slug']=Str::slug($data['title']);
        //dd($data);
        Post::create($request->validated());
        return to_route("post.index");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view("dashboard.post.show", compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $categories = Category::pluck('id','title');
        
       echo view("dashboard.post.edit", compact('categories', 'post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Post $post)
    {
        $data =$request->validated();
        if(isset($data["image"])){
  
          $data["image"] =  $filename = time().".".$data["image"]->extension();
            
            $request->image->move(public_path("image"), $filename);
        }
        
        $post->update($data);
        $request->session()->flash('status', "Registro actualizado.");
        
        return to_route("post.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route("post.index");
    }
}
