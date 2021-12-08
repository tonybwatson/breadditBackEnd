<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVoteTypeRequest;
use App\Http\Requests\UpdateVoteTypeRequest;
use App\Models\VoteType;

class VoteTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreVoteTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVoteTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VoteType  $voteType
     * @return \Illuminate\Http\Response
     */
    public function show(VoteType $voteType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VoteType  $voteType
     * @return \Illuminate\Http\Response
     */
    public function edit(VoteType $voteType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVoteTypeRequest  $request
     * @param  \App\Models\VoteType  $voteType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVoteTypeRequest $request, VoteType $voteType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VoteType  $voteType
     * @return \Illuminate\Http\Response
     */
    public function destroy(VoteType $voteType)
    {
        //
    }
}
