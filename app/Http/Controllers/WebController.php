<?php

namespace App\Http\Controllers;

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
use App\Comment;
use App\Category;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Session;


class WebController extends Controller
{
    public function index(){
        $categories = Category::all();
        $post = Post::orderBy('count_views','desc')->take(10)->get();
        $posts = Post::orderBy('id','desc')->take(1)->get();
        $like = Post::orderBy('count_like','desc')->take(4)->get();
        return view("themes.website.home",['categories'=>$categories,'post'=>$post,'posts'=>$posts,'like'=>$like]);
    }

    public function categoryPost(){

        return view("themes.website.categoryPost");
    }
    public function viewPost(){

        return view("themes.website.post_view");
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
}
