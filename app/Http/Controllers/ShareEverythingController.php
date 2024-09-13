<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\ContentUpdated;

class ShareEverythingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json('asdasdasd asdas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $share = Share::where('slug', $slug)
            ->where('expires_at', '>', now())
            ->firstOrFail();

        return response()->json($share);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function updateContent(Request $request)
    {
        $slug = $request->input('slug');
        $content = $request->input('content');
        
        broadcast(new ContentUpdated($slug, $content));
    }

}
