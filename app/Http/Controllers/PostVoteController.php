<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostVoteRequest;
use App\Http\Requests\UpdatePostVoteRequest;
use App\Http\Resources\PostVoteResource;
use App\Models\PostVote;
use App\Models\Post;

class PostVoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (PostVote::all());
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
     * @param  \App\Http\Requests\StorePostVoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostVoteRequest $request)
    {
        $input = $request->all();
        $postVote = PostVote::create($input);
        return new PostVoteResource($postVote);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostVote  $postVote
     * @return \Illuminate\Http\Response
     */
    public function show(PostVote $postVote)
    {
         return $postVote;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostVote  $postVote
     * @return \Illuminate\Http\Response
     */
    public function edit(PostVote $postVote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostVoteRequest  $request
     * @param  \App\Models\PostVote  $postVote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostVoteRequest $request, PostVote $postVote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostVote  $postVote
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostVote $postVote)
    {
        //
    }


    // public function getVotesByPost(Request $request)
    // {
    //     $posts = Post::where('post_id', '=', $request->id)->get();

    //     $postvotes = $posts->load(['postvotes.post_id', 'postvotes.']);
    //     return ['post' => $posts, 'postvotes' => $postvotes[0]->postvotes->toArray()];
    // }
}
