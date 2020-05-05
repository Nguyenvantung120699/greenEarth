<?php
namespace App\Http\Controllers;

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

use App\Feedback;
use App\Post;
use App\Category;
use App\Comment;
use App\User;
use App\Brand;

class WebController extends Controller
{
    public function index(){
        $categories = Category::all();
        $post = Post::orderBy('count_views','desc')->take(6)->get();
        // $postt = Post::orderBy('id','desc')->take(4)->get();
        // $posts = Post::orderBy('id','desc')->take(1)->get();
        $like = Post::orderBy('count_like','desc')->take(4)->get();
        return view("themes.website.home",['categories'=>$categories,'post'=>$post,'like'=>$like]);
    }

    public function categoryPost($path){
        $category = Category::where("path","=",$path)->first();

        $posts = $category->Posts()->paginate(5);
//        $cat_id = [];
//        $cat_id[] =$category->getId();
//        $posts = Post::whereIn("category_id",$cat_id)->with("Category")->orderBy("created_at","desc")->paginate(10);
        return view("themes.website.categoryPost",["categories"=>$category,"posts"=>$posts]);
    }
    public function viewPost($cat_path,$slug){
        $posts = Post::where("slug",$slug)->first();
        $post = Post::orderBy('count_views','desc')->take(6)->get();
        $comment = $posts->Comments->where('status',0);


        return view("themes.website.post_view",["posts"=>$posts,'post'=>$post,'comments'=>$comment]);
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
    }
}
