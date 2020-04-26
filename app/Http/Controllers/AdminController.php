<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view("themes.admin.home");
    }

    public function category(){
        $categories = Category::all();
        return view("themes.admin.category.index",["categories"=>$categories]);
    }
    public function categoryCreate(){
        return view("themes.admin.category.create");
    }
    public function categoryEdit($id){
        $categories = Category::find($id);
        return view("themes.admin.category.edit",["categories"=>$categories]);
    }
    public function categoryStore(Request $request){
            $request->validate([
                "category_name"=> "required|string|unique:category"
            ]);
        try {
                Category::create([
                        "category_name"=>$request->get("category_name"),
                        "path"=>str_slug($request->get("category_name"))
                ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
    public function categoryUpdate($id,Request $request){
            $categories = Category::find($id);
            $request->validate([
                "category_name"=> "required|string|unique:category,category_name,".$id
            ]);
        try {
               $categories->update([
                   "category_name"=>$request->get("category_name"),
                   "path"=>str_slug($request->get("category_name"))
               ]);
        }catch (\Exception $e){
             return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
    public function categoryDestroy($id){
        $categories = Category::find($id);
        try {
            $categories->delete();
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
    public function disableCategory($id){
        $categories = Category::find($id);
        try {
            $categories->status = "disable";
            $categories->save();
        }catch (\Throwable $e){
                throw $e;
        }
        return redirect()->to("admin/category");
    }
    public function restoreCategory($id){
        $categories = Category::find($id);
        try {
            $categories->status = "active";
            $categories->save();
        }catch (\Throwable $th){
            throw $th;
        }
        return redirect()->to("admin/category");
    }

    // {{--post--}}
    public function post(){
        $post = Post::paginate(10);
        return view("themes.admin.post.index",["posts"=>$post]);
    }
    public function postCreate(){
        return view("themes.admin.post.create");
    }
    public function postStore(Request $request){
        $request->validate([
            "title"=>"required",
            "author"=>"required",
            "category_id"=>"required",
            "short_desc"=>"required",
            "content"=>"required",
        ]);
        try {
            Post::create([
                "title"=>$request->get("title"),
                "author"=>$request->get("author"),
                "category_id"=>$request->get("category_id"),
                "slug"=>str_slug($request->get("title")),
                "short_desc"=>$request->get("short_desc"),
                "content"=>$request->get("content")
            ]);
        }catch (\Exception $e){
                return redirect()->back();
        }
        return redirect()->to("admin/post");
    }
    public function postEdit($id){
        $post = Post::find($id);
        return view("themes.admin.post.edit",["posts"=>$post]);
    }
    public function postUpdate($id,Request $request){
            $posts = Post::find($id);
            $request->validate([
                "title"=> "required|string|unique:post,title,".$id,
                "category_id"=>"required|integer",
                "short_desc"=>"required|string",
                "content"=>"required|string",  
            ]);

        try {
            $posts->update([
                "title"=>$request->get("title"),
                "category_id"=>$request->get("category_id"),
                "short_desc"=>$request->get("short_desc"),
                "content"=>$request->get("content"),
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/post");
    }
    public function postDestroy($id){
          $post = Post::find($id);
        try {
             $post->delete();
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/post");
    }

}
