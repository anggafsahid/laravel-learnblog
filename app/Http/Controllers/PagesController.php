<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
class PagesController extends Controller
{

	public function index(){
		$data['get_posts'] 	=  $this->mdl_get_allPost();
		return view('pages.p_index', $data);
	}

	public function about(){
		$data 	= array(
    		'name'    	=>   'about'
    	);
		return view('pages.p_about')->with($data);
	}

    public function services(){
    	$data = array(
    		'name'    	=>   'services',
    		'services'	=> 	 ['Web Design', 'Programming', 'SEO']
    	);
		return view('pages.p_services', $data);
	}

	public function post($p_post_id=1){
		if(isset($_GET['post_id'])){$p_post_id	=	$_GET['post_id'];};
		$post 	=  $this->mdl_get_post($p_post_id);
		foreach ($post as $row) {
    		$post_text 				=	$row->c_post_text;
    		$post_title				=	$row->c_post_title;
    		$post_imageurl			=   $row->c_post_imageurl;
    		$post_contributor	   	=	$row->c_user_fullname;
		}
    	$data 	= array(
    		'post_title'    		=>   $post_title,
    		'post_contributor'   	=>	 $post_contributor,
    		'post_image' 			=>   $post_imageurl,
    		'post_content_text'  	=>	 $post_text,
    	);
		return view('pages.p_post', $data);
	}

	public function createPost_form(){
		return view('pages.p_create');
	}

	public function createPost_insert(Request $request){
		//dd($request->all());
		$post_title = $request->post_title; 
		$post_text 	= $request->post_text; 
		echo $post_text;
	}

	public function mdl_get_allPost(){
		$post 	= 	DB::table('t002_post')
					  	->join('t001_user', 't002_post.c_t001_id', '=', 't001_user.c_t001_id')
					  	->get();
		return 	$post;
	}

	public function mdl_get_post($p_post_id){
		$post 	= 	DB::table('t002_post')
						->where('c_t002_id', '=', $p_post_id)
					  	->join('t001_user', 't002_post.c_t001_id', '=', 't001_user.c_t001_id')
					  	->get();
		return 	$post;
	}

}
