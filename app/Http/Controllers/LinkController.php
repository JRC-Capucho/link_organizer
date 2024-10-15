<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Http\Requests\UpdateLinkRequest;
use App\Models\Link;
use App\Models\User;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('links');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLinkRequest $request)
    {
        /** @var User $user */
        $user = auth()->user();

        $data = $request->validated();

        if ($file = $request->photo) {
            $data['photo'] = $file->store('photos');
        }

        $user->links()->create($data);

        return to_route('dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLinkRequest $request, Link $link)
    {
        $data = $request->validated();

        if ($file = $request->photo) {
            $data['photo'] = $file->storeAs('photos');
        }

        $link->fill($data)->save();

        return to_route('dashboard')->with('message', 'Update successful');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Link $link)
    {

        $link->delete();

        return to_route('dashboard')->with('message', 'Successful deletion');
    }

    public function up(Link $link)
    {

        $link->moveUp();

        return back();
    }

    public function down(Link $link)
    {

        $link->moveDown();

        return back();
    }
}
