<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentVoteRequest;
use App\Http\Requests\UpdateCommentVoteRequest;
use App\Models\CommentVote;

class CommentVoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCommentVoteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommentVoteRequest $request)
    {
        $input = $request->all();
        $comment_vote = CommentVote::create($input);
        return new CommentVote($comment_vote);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CommentVote  $commentVote
     * @return \Illuminate\Http\Response
     */
    public function show(CommentVote $commentVote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CommentVote  $commentVote
     * @return \Illuminate\Http\Response
     */
    public function edit(CommentVote $commentVote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommentVoteRequest  $request
     * @param  \App\Models\CommentVote  $commentVote
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommentVoteRequest $request, CommentVote $commentVote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CommentVote  $commentVote
     * @return \Illuminate\Http\Response
     */
    public function destroy(CommentVote $commentVote)
    {
        //
    }
}
