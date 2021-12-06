<?php

namespace App\Http\Controllers;

use App\Models\Subreaddit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\SubreadditResource;
use Illuminate\Support\Facades\Log;

class SubreadditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return (Subreaddit::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $subreaddit = Subreaddit::create(1)([
        // 'name' => 'name',
        // ]);
        // return new Subreaddit($subreaddit);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:21|unique:subreaddits,name',
            // add more validation cases if needed
            // https://laravel.com/docs/8.x/validation
        ]);

        if ($validator->fails()) {
            return response(['message' => 'Validation errors', 'errors' =>  $validator->errors(), 'status' => false], 422);
        }

        // $faker = \Faker\Factory::create(1);
        $input = $request->all();
        $subreaddit = Subreaddit::create($input);
        return new SubreadditResource($subreaddit);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subreaddit  $subreaddit
     * @return \Illuminate\Http\Response
     */
    public function show(Subreaddit $subreaddit)
    {
        // return new Subreaddit($subreaddit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subreaddit  $subreaddit
     * @return \Illuminate\Http\Response
     */
    public function edit(Subreaddit $subreaddit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subreaddit  $subreaddit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subreaddit $subreaddit)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subreaddit  $subreaddit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subreaddit $subreaddit)
    {
        $subreaddit->delete();
        return response(null, 204);
    }
}
