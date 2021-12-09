<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Http\Resources\PostResource;
use App\Http\Controllers\Auth;
use App\Models\Post;
use App\Models\Subreaddit;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PostResource::collection(Post::with(['comments.user',
        'user',
        'post_votes.user',
        // 'comments.comment_votes.user',
        ])->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|min:5',
            'content' => 'required|min:1',
            // add more validation cases if needed
            // https://laravel.com/docs/8.x/validation
        ]);

        if ($validator->fails()) {
            return response(['message' => 'Validation errors', 'errors' =>
            $validator->errors(), 'status' => false], 422);
        }

        $input = $request->all();
        $user = $request->user();
        $input['user_id'] = $user->id;
        // $input['user_name'] = $user->name;
        $post = Post::create($input);
        return new PostResource($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return new PostResource($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        // if post that is being deleted is being done by admin of sub, admin of reddit, or post owner
        $post = Post::find($request->post_id);
        Log::debug($post);
        $user_id = $request->user()->id;
        if($post->user_id == $user_id){
            //$post->authorize('delete', $post);
            $post->delete();
            return response($post, 200);
        }
        return response(null, 204);
    }

    public function getPostsBySub(Request $request)
    {
        $sub = Subreaddit::where('name', '=', $request->name)->get();

        $posts = $sub->load(['posts.comments.user',
        'posts.user',
        'posts.post_votes.user',
        // 'comments.comment_votes.user'
        ]);
        return ['subreaddit' => $sub, 'posts' => $posts[0]->posts->toArray()];
    }
}
