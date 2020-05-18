<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\Category;
use App\Comment;
use App\Donate;
use App\Donors;
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
                'target'=>'required',
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
                'target'=>$request->get("target"),
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
    public function detailEvent($id){
        $events = Event::find($id);
        $member = $events->Member;
//        $donate_total = 0;

        return view("themes.admin.event.detail",compact("events","member"));
    }


    //{{--campaign--}}
    public function campaign(){
        $campaigns = Campaign::all();
        return view("themes.admin.campaign.index",compact("campaigns"));
    }
    public function createCampaign(){
        return view("themes.admin.campaign.create");
    }
    public function storeCampaign(Request $request){
        $request->validate([
            'campaign_name'=>'required',
            'content'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'organizational_units'=>'required',

        ]);
        try {
            $image = null;
            $ext_allow =['png','jpg','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext =$file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                    $file->move("upload/campaign/",$file_name);
                    $image = "upload/campaign/".$file_name;
                }
            }
            Campaign::create([
                "campaign_name"=>$request->get("campaign_name"),
                "image"=>$image,
                "content"=>$request->get("content"),
                "start_date"=>$request->get("start_date"),
                "campaign_slug"=>str_slug($request->get("campaign_name")),
                "end_date"=>$request->get("end_date"),
                "organizational_units"=>$request->get("organizational_units"),

            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/campaign");
    }
    public function campaignEdit($id){

        $campaigns= Campaign::find($id);
        return view("themes.admin.campaign.edit",compact('campaigns'));
    }
    public function campaignUpdate($id,Request $request){
        $campaigns = Campaign::find($id);
        $request->validate([
            'campaign_name'=>'required',
            'content'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'organizational_units'=>'required',
        ]);
        try {
            $image = null;
            $ext_allow =['png','jpg','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext =$file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                    $file->move("upload/campaign/",$file_name);
                    $image = "upload/campaign/".$file_name;
                }
            }
            $campaigns->update([
                "campaign_name"=>$request->get("campaign_name"),
                "image"=>$image,
                "content"=>$request->get("content"),
                "start_date"=>$request->get("start_date"),
                "end_date"=>$request->get("end_date"),
                "campaign_slug"=>str_slug($request->get("campaign_name")),
                "organizational_units"=>$request->get("organizational_units"),
            ]);

        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/campaign");
    }
    public function campaignDestroy($id){
        $campaigns = Campaign::find($id);
        try {
            $campaigns->delete();
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/campaign");
    }

    public function detailCampaign($id){
        $campaigns = Campaign::find($id);
        $donate = $campaigns->Donate;
        $donate_total = 0;
        foreach ($donate as $d){
            $donate_total += $d->donate;
        }
        return view("themes.admin.campaign.detail",compact("campaigns","donate_total","donate"));
    }

//{{--donors--}}

    public function donors(){
        $donors = Donors::all();
        return view("themes.admin.donors.index",compact("donors"));
    }

    public function createDonors(){
        return view("themes.admin.donors.create");
    }
    public function storeDonors(Request $request){
        $request->validate([
            'name'=>'required',
            'event_id'=>'required'
        ]);
        try {
            $image = null;
            $ext_allow = ['jpg','png','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                    $file->move("upload/donors/",$file_name);
                    $image = "upload/donors/".$file_name;
                }
            }

            $donors = Donors::create([
                'name'=>$request->get("name"),
                'logo'=>$image,
                'event_id'=>$request->get("event_id")
            ]);

        }catch (\Throwable $th){
            return back();
        }
        return redirect()->to("admin/donors");
    }
    public function donorsEdit($id){
        $donors = Donors::find($id);
        return view("themes.admin.donors.edit",compact("donors"));
    }
    public function donorsUpdate($id,Request $request){
        $donors = Donors::find($id);
        $request->validate([
            'name'=>'required',
            'event_id'=>'required'
        ]);
        try {
            $image = null;
            $ext_allow = ['jpg','png','giF','svg'];
            if ($request->hasFile("image")){
                $file = $request->file("image");
                $file_name = time()."-".$file->getClientOriginalName();
                $ext = $file->getClientOriginalExtension();
                if (in_array($ext,$ext_allow)){
                    $file->move("upload/donors/",$file_name);
                    $image = "upload/donors/".$file_name;
                }
            }

            $donors->upadate([
            'name'=>$request->get("name"),
            'logo'=>$image,
            'event_id'=>$request->get('event_id')
             ]);

        }catch (\Throwable $th){
            return redirect()->back();
        }
        return redirect()->to("admin/donors");
    }
    public function donorsDestroy($id,Request $request){
        $donors = Donors::find($id);
        try {
            $donors->delete();
        }catch (\Throwable $th){
            return redirect()->back();
        }
        return redirect()->to("admin/donors");
    }
}
