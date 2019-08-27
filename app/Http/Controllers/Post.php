<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\PostNew;

class Post extends Controller
{
    protected $rules = [
        'posts' => 'required'
    ];

    protected $errors = [
        'posts' => 'Không được để trống'
    ];

    public function index(Request $request)
    {
        $edit = null;
        if ($request->get('id')) {
            $edit = PostNew::find($request->get('id'));
        }
        $data = PostNew::all();
        return view('post/index', compact('data', 'edit'));
    }

    public function show($id)
    {
        $data = PostNew::find($id);
        if (empty($data)) {
            return abort(404);
        }
        return view('post/show', compact('data'));
    }

    public function add(Request $request)
    {
        $this->validate($request , $this->rules, $this->errors);
        $data = new PostNew();
        if (empty($data)) {
            return abort(404);
        }
        $data->posts = $request->get('posts');
        $data->save();
        return redirect('index/post');
    }

    public function editPost($id, Request $request)
    {
        $this->validate($request , $this->rules, $this->errors);
        $data = PostNew::find($id);
        if (empty($data)) {
            echo $this->errors['id'];
            return abort(404);
        }
        $data->posts = $request->get('posts');
        $data->save();
        return redirect('index/post');
    }
}
