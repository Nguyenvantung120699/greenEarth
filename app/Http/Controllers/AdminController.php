<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Donate;
use App\Event;
use App\Member;
use App\Post;
use App\User;
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
            $image = null;
            $ext_allow =['png','jpg','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext =$file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                        $file->move("upload/post",$file_name);
                        $image = "upload/post".$file_name;
                }
            }
            Post::create([
                "title"=>$request->get("title"),
                "image"=>$image,
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
                "category_id"=>"required",
                "short_desc"=>"required",
                "content"=>"required",
            ]);
        try {
            $image = null;
            $ext_allow =['png','jpg','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext =$file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                        $file->move("upload/post/",$file_name);
                        $image = "upload/post/".$file_name;
                }
            }
            $posts->update([
                "title"=>$request->get("title"),
                "image"=>$image,
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
    public function postDestroy($id){
          $post = Post::find($id);
        try {
             $post->delete();
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/post");
    }
        //{{--comment--}}
    public function comment(){
        $comments = Comment::all();
        return view("themes.admin.comment.index",compact("comments"));
    }
//        {{--account--}}
    public function account(){
        return view("themes.admin.account.index");
    }
    public function userCreate(){
        return view('themes.admin.account.create');
    }

    public function userStore(Request $request){
        $request->validate([
            "email"=> "required|string|max:255|unique:users",// validation laravel
            "name"=> "required|string",
            "password"=> "required|string",
        ]);
        try{
            User::create([
                "name"=> $request->get("name"),
                "email"=> $request->get("email"),
                "password"=> $request->get("password"),
            ]);
        }catch(\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/account");
    }

    // {{--member--}}
    public function member(){
        $members = Member::where("status","=",1)->orderby("created_at","DESC")->get();
        return view("themes.admin.member.index",compact("members"));
    }
    public function pendingMembers(){
        $members = Member::where("status","=",0)->orderby("created_at","DESC")->get();
        return view("themes.admin.member.pendingMember",compact("members"));
    }
    public function pendingMember($id){
        $member = Member::find($id);
        try {
            $member->status = "0";
            $member->save();
        }catch (\Throwable $th){
            throw $th;
        }
        return redirect()->to("admin/member");
    }
    public function restoreMember($id){
        $member = Member::find($id);
        try {
            $member->status = "1";
            $member->save();
        }catch (\Throwable $th){
            throw $th;
        }
        return redirect()->to("admin/member/pending");
    }
// {{--donate--}}

    public function donate(){
        $donates = Donate::all();
        return view("themes.admin.donate.index",compact("donates"));
    }
    //{{--event--}}
    public function event(){
        $events = Event::all();
        return view("themes.admin.event.index",compact("events"));
    }
    public function createEvent(){
        return view("themes.admin.event.create");
    }
    public function storeEvent(Request $request){
        $request->validate([
                'event_name'=>'required',
                'content'=>'required',
                'start_date'=>'required',
                'end_date'=>'required',
                'organizational_units'=>'required',
                'address'=>'required'
        ]);
        try {
            $image = null;
            $ext_allow =['png','jpg','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext =$file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                    $file->move("upload/event/",$file_name);
                    $image = "upload/event/".$file_name;
                }
            }

            Event::create([
                "event_name"=>$request->get("event_name"),
                "image"=>$image,
                "content"=>$request->get("content"),
                "start_date"=>$request->get("start_date"),
                "event_slug"=>str_slug($request->get("event_name")),
                "end_date"=>$request->get("end_date"),
                "organizational_units"=>$request->get("organizational_units"),
                "address"=>$request->get("address")
            ]);

          }catch (\Exception $e){
                return redirect()->back();
        }
                return redirect()->to("admin/event");
    }
    public function eventEdit($id){

            $events= Event::find($id);
        return view("themes.admin.event.edit",compact('events'));
    }
    public function eventUpdate($id,Request $request){
        $events = Event::find($id);
        $request->validate([
            'event_name'=>'required',
            'content'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'organizational_units'=>'required',
            'address'=>'required'
        ]);
        try {
            $image = null;
            $ext_allow =['png','jpg','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext =$file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                    $file->move("upload/event/",$file_name);
                    $image = "upload/event/".$file_name;
                }
            }

            $events->update([
                "event_name"=>$request->get("event_name"),
                "image"=>$image,
                "content"=>$request->get("content"),
                "start_date"=>$request->get("start_date"),
                "event_slug"=>str_slug($request->get("event_name")),
                "end_date"=>$request->get("end_date"),
                "organizational_units"=>$request->get("organizational_units"),
                "address"=>$request->get("address")
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/event");
    }
    public function eventDestroy($id){
        $events = Event::find($id);
        try {
            $events->delete();
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/event");
    }
}
