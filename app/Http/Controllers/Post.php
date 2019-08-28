<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
            $edit = DB::table('post_news')
                ->where('id', $request->get('id'))
                ->first();
        }
        $data = DB::table('post_news')
            ->where('is_deleted', 0)
            ->get();
        return view('post/index', compact('data', 'edit'));
    }

    public function show($id)
    {
        $data = DB::table('post_news')
            ->where('id', $id)
            ->first();
        if (empty($data)) {
            return abort(404);
        }
        return view('post/show', compact('data'));
    }

    public function add(Request $request)
    {
        /**
         * @throw ValidationException
         */
        $this->validate($request , $this->rules, $this->errors);
        $data = new PostNew();
        if (empty($data)) {
            return abort(404);
        }
        $data->posts = $request->get('posts');
        $data->is_deleted = 0;
        $data->save();
        return redirect('index/post');
    }

    public function editPost($id, Request $request)
    {
        // note cho validate het bao loi vàng
        $this->validate($request , $this->rules, $this->errors);
        $data = DB::table('post_news')->where('id', $id);
        if (!empty($data)) {
            $data->update([
                'posts' => $request->get('posts')
            ]);
        }
        return redirect('index/post');
    }

    public function delete($id){
        $data = DB::table('post_news')->where('id', $id);
        if (!empty($data)) {
            $data->update([
                'is_deleted' => 1
            ]);
        }
        return redirect('index/post');
    }

    public function lk(){
        $comment = PostNew::find(1);

        echo $comment->byUser->email;
    }
}
