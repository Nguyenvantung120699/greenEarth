<?php
namespace App\Http\Controllers;

use App\Donate;
use App\Introduction;
use App\Member;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

use App\Mail\Donates;
use App\Feedback;
use App\Post;
use App\Category;
use App\Comment;
use App\User;
use App\Campaign;
use App\Event;

class WebController extends Controller
{


    //multilanguage
    public function changeLanguage($language)
    {
        Session::put('website_language', $language);

        return redirect()->back();
    }


    public function index(){
        $categories = Category::all();
        $post = Post::orderBy('count_views','desc')->take(6)->get();
        $postt = Post::orderBy('id','desc')->take(2)->get();
        // $posts = Post::orderBy('id','desc')->take(1)->get();
        $like = Post::orderBy('count_like','desc')->take(4)->get();
        $campaigns = Campaign::orderBy('id','desc')->take(1)->get();
        $events = Event::orderBy('id','desc')->take(1)->get();
        return view("themes.website.home",['categories'=>$categories,'post'=>$post,'like'=>$like,'postt'=>$postt,'campaigns'=>$campaigns,'events'=>$events]);
    }

    public function categoryPost($path){
        $categories = Category::where("path","=",$path)->first();

        $posts = $categories->Posts()->paginate(5);
        $title = "Chuyên mục - $categories->category_name";
        return view("themes.website.categoryPost",compact("categories","posts","title"));
    }
    public function viewPost($cat_path,$slug){
        $posts = Post::where("slug",$slug)->first();
        $post = Post::orderBy('count_views','desc')->take(6)->get();
        $comments = $posts->Comments->where('status',0);
        $title = "Bài viết - $posts->title";

        return view("themes.website.post_view",compact("posts","post","comments","title"));
    }
    //ajax login

    public function postLogin(Request $request){
                $validator = Validator::make($request->all(),[
                    "email" => 'required|email',
                    "password"=> "required|min:8"
                ]);
    
                if($validator->fails()){
                    return response()->json(["status"=>false,"message"=>$validator->errors()->first()]);
                }
                $email = $request->get("email");
                $pass = $request->get("password");
                if(Auth::attempt(['email'=>$email,'password'=>$pass])){
                    return response()->json(['status'=>true,'message'=>"Login successfully!"]);
                }
                return response()->json(['status'=>false,'message'=>"login failure"]);
            }

            
    public function search(Request $request){
        $category = Category::where('category_name','like','%'.$request->get("key").'%')->get();
        $post = Post::where('title','like','%'.$request->get("key").'%')->get();
        $user = User::where('name','like','%'.$request->get("key").'%')->get();
        return view("themes.website.search",['category'=>$category,'post'=>$post,'user'=>$user]);
    }

    public function commentPost(Request $request,$post_id){
            $request->validate([
                "user_name"=>"required",
                "email"=>"required",
                "message"=>"required"
            ]);
        try {
                $comment = Comment::create([
                    "post_id"=>$post_id,
                    "user_name"=>$request->get("user_name"),
                    "email"=>$request->get("email"),
                    "content"=>$request->get("message"),
                    "comment_id"=>$request->get("comment_id"),
                    "created_at"=>Carbon::now()->toDateTimeString()
                ]);
        }catch (\Throwable $th){
            throw  $th;
        }
        return back();
//        return response()->json([
//            'message' => 'Comment successfully.'
//        ], 200);
    }

    public function joinGroup(Request $request,$events_id){

            $request->validate([
                "name"=>"required",
                "email"=>"required",
                "telephone"=>"required",
                "address"=>"required"
            ]);

        try {
              $member = Member::create([
                  "event_id"=>$events_id,
                  "name"=>$request->get("name"),
                  "email"=>$request->get("email"),
                  "telephone"=>$request->get("telephone"),
                  "address"=>$request->get("address"),
              ]);
        }catch (\Throwable $th){
            throw $th;
        }   
        return response()->json([
            'message' => 'Register successfully.'
        ], 200);
    }
    public function Donate(Request $request,$campaigns_id){

        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'payment_method'=>'required',
            'donate'=>'required',
            'message'=>'required'
        ]);
        try {
            $donate = Donate::create([
                'name'=>$request->get("name"),
                'email'=>$request->get("email"),
                'telephone'=>$request->get("telephone"),
                'address'=>$request->get("address"),
                'payment_method'=>$request->get("payment_method"),
                'donate'=>$request->get("donate"),
                'message'=>$request->get("message"),
                'campaign_id'=>$campaigns_id,

            ]);

        }catch (\Throwable $th){
        }
        return response()->json([
            'message' => 'Donate successfully.'
        ], 200);
        Mail::to('ntung9921@gmail.com')->send(new Donates());
    }
    public function introduction(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'telephone'=>'required',
            'address'=>'required',
            'message'=>'required'

        ]);
        try {
            $introduction = Introduction::create([
                'name'=>$request->get("name"),
                'email'=>$request->get("email"),
                'gender'=>$request->get("gender"),
                'telephone'=>$request->get("telephone"),
                'address'=>$request->get("address"),
                'message'=>$request->get("message")
            ]);
        }catch (\Throwable $th){
            throw $th;
        }
        return response()->json([
            'message' => 'Register successfully.'
        ], 200);

    }
    public function work(){
        return view("themes.website.register_work");
    }


    public function campaign(){
        $campaign = Campaign::all();
        return view("themes.website.campaign",["campaign"=>$campaign]);
    }
    public function events(){
        $event = Event::all();
        return view("themes.website.events",["event"=>$event]);
    }

    public function viewcampaign($campaign_slug){
        // $campaign = Campaign::find($id);
        $campaigns = Campaign::where("campaign_slug",$campaign_slug)->first();
        $campaignt = Campaign::orderBy('id','desc')->take(6)->get();
        $donatep = Donate::where("campaign_id",$campaigns->id)->get();
        $tdonate = Donate::where("campaign_id",$campaigns->id)->count();
        $total_money = Donate::where("campaign_id",$campaigns->id)->sum('donate');
         return view("themes.website.campaign_view",["campaigns"=>$campaigns,"campaignt"=>$campaignt,"donatep"=>$donatep,"tdonate"=>$tdonate,"total_money"=>$total_money]);
    }
    public function viewevents($event_slug){
        $events = Event::where("event_slug",$event_slug)->first();
        $eventt = Event::orderBy('id','desc')->take(6)->get();
        $pevent = Member::where("event_id",$events->id)->count();
        return view("themes.website.evens_view",["events"=>$events,"eventt"=>$eventt,"pevent"=>$pevent]);
    }

    public function contact(){

        return view("themes.website.contact");
    }

}
