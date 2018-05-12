<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Post;
use DB;

class postsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]); //index and show page can be viewed by anyone
    }
    public function index()
    {
        // $posts = Post::orderBy('created','desc')->take(10)->get(); //->take(10) will show 10 results only
        //pagination
        $posts = Post::where('published',1)->orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        return view('posts.create');
    }
    protected function getFolder(){
        $id = auth()->id();
        return 'posts'.DIRECTORY_SEPARATOR.'user_'.$id;
    }    
    public function store(Request $request)
    {
        $this->validate($request,[
            'ico_name'=>'required',
            'ico_logo'=>'image|max:1999' // image validation
        ]);
        
        // Handle file upload
        if($request->hasFile('ico_logo')){
            //Get file name with extension
            $filenameWithExt = $request->file('ico_logo')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension=$request->file('ico_logo')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $folder = $this->getFolder();
            Storage::disk('local')->put(
                $folder.DIRECTORY_SEPARATOR.$fileNameToStore,
                 File::get($request->file('ico_logo'))
             );
        }else{
            $fileNameToStore='noimage.jpg'; 
        }
        //create Post
        $post=new Post;
        $post->type_of_application=$request->input('type_of_application');
        $post->ico_name=$request->input('ico_name');
        $post->ico_slogan=$request->input('ico_slogan');
        $post->website_url=$request->input('website_url');
        $post->country_of_operation=$request->input('country_of_operation');
        $post->link_to_video=$request->input('link_to_video');
        $post->body=$request->input('body');
        
        $post->user_id = auth()->user()->id;
        $post->cover_pic=$fileNameToStore;

        $post->token_name=$request->input('token_name');
        $post->token_type=$request->input('token_type');
        $post->platform=$request->input('platform');
        $post->pre_ico_price=$request->input('pre_ico_price');
        $post->current_ico_price=$request->input('current_ico_price');
        $post->total_token_sale=$request->input('total_token_sale');
        $post->total_token_sold=$request->input('total_token_sold');
        $post->restricted_country = $request->input('restricted_country');
        $post->bounty = $request->input('bounty');
        $post->link_to_bounty = $request->input('link_to_bounty');
        $post->minimum_investment = $request->input('minimum_investment');

        $post->accepting = $request->input('accepting');
        $post->soft_cap = $request->input('soft_cap');
        $post->hard_cap = $request->input('hard_cap');
        $post->distributed_ico = $request->input('distributed_ico');
        $post->ico_start_date= $request->input('ico_start_date');
        $post->ico_end_date= $request->input('ico_end_date');
        $post->link_to_whitepaper=$request->input('link_to_whitepaper');
        $post->whitelist=$request->input('whitelist');

        if($request->input('kyc') == 'Yes')
            $post->kyc= 'Y';
        else
            $post->kyc= 'N';


        $post->bonus=$request->input('bonus');
        $post->pre_sale_bonus=$request->input('pre_sale_bonus');
        $post->main_sale_bonus=$request->input('main_sale_bonus');


        // $post->category=$request->input('category');
        $categories='';
        foreach ($request->input('category') as $key => $value) {
            $categories .= $value.',';
        }
        $post->categories= $categories;
// dd($categories);

        $post->facebook_link=$request->input('facebook_link');
        $post->bitcointalk_link=$request->input('bitcointalk_link');
        $post->twitter_link=$request->input('twitter_link');
        $post->github_link=$request->input('github_link');
        $post->medium_link=$request->input('medium_link');
        $post->telegram_link=$request->input('telegram_link');
        $post->reddit_link=$request->input('reddit_link');
        $post->contact_email=$request->input('contact_email');

        $post->save();

        return redirect()->back()->with('success','Your ICO will be posted after review.');
}

    public function show($id)
    {
        $post = Post::find($id);
        dd($post);
        return view('posts.show')->with('post',$post);
    }

    public function edit($id)
    {
        $post = Post::find($id);

        //Check for respective post creator
        if(auth()->user()->id!==$post->user_id){
            return redirect ('/posts')->with('error','You are not authorized');
        }
        return view ('posts.edit')->with('post',$post);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'ico_logo'=>'image|max:1999'
        ]);

        //create Post
        $post = Post::find($id);
        $post->application_type=$request->type;
        $post->title=$request->input('ico_name');
        $post->slogan=$request->input('slogan');
        $post->website_url=$request->input('web_url');
        $post->country_operate=$request->input('operation');
        $post->video_url=$request->input('video');
        $post->body=$request->input('intro_ico');
        $post->user_id = auth()->user()->id;

        $post->token_name=$request->input('token_name');
        $post->token_type=$request->input('token_type');
        $post->platform=$request->input('platform');
        $post->pre_price=$request->input('pre_price');
        $post->cur_price=$request->input('cur_price');
        $post->total_sale=$request->input('total_sale');
        $post->total_sold=$request->input('total_sold');
        $post->restricted = $request->input('restricted');
        $post->bounty_avail = $request->input('bounty_avail');
        $post->bounty_link = $request->input('bounty_link');
        $post->min_invest = $request->input('min_invest');

        $post->accepting = $request->input('accepting');
        $post->soft_cap = $request->input('soft_cap');
        $post->hard_cap = $request->input('hard_cap');
        $post->distributed = $request->input('distributed');
        $post->start_date= $request->input('start_date');
        $post->end_date= $request->input('end_date');
        $post->whitepaper=$request->input('whitepaper');
        $post->wlist=$request->input('wlist');
        $post->kyc=$request->input('kyc');

        $post->bonus_avail=$request->input('bonus_avail');
        $post->pre_bonus=$request->input('pre_bonus');
        $post->cur_bonus=$request->input('cur_bonus');
        // $post->category=$request->input('category');
        $post->fb_link=$request->input('fb_link');
        $post->btalk_link=$request->input('btalk_link');
        $post->twit_link=$request->input('twit_link');
        $post->git_link=$request->input('git_link');
        $post->med_link=$request->input('med_link');
        $post->tel_link=$request->input('tel_link');
        $post->red_link=$request->input('red_link');
        $post->contact_email=$request->input('contact_email');
        if($request->hasFile('ico_logo')){
            if($post->ico_logo!= 'noimage.jpg'){
                Storage::delete('public/cover_images'.$post->ico_logo);
            }
            $filenameWithExt = $request->file('ico_logo')->getClientOriginalName();
            //Get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension=$request->file('ico_logo')->getClientOriginalExtension();
            //file name to store
            $fileNameToStore=$filename.'_'.time().'.'.$extension;
            //upload image
            $path=$request->file('ico_logo')->storeAs('public/cover_images',$fileNameToStore);
            $post->ico_logo = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success','Successfully updated');
    }

    public function destroy($id)
    {
        $post=Post::find($id);
        //Check for respective post creator
        if(auth()->user()->id!==$post->user_id){
            return redirect ('/posts')->with('error','You are not authorized');
        }

        if($post->ico_logo!='noimage.jpg'){
            //Delete image
            Storage::delete('public/cover_images/'.$post->ico_logo);
        }

        $post->delete();
        return redirect()->back()->with('success','Post deleted');
    }
    
    

}
