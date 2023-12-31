<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = Hash::make($validated['password']);
        $user = User::create($validated);
        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return User::findOrfail($id);
    }

    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $validated = $request->validated();
        $carouselItem = User::findOrFail($id)->update($validated);
        return $carouselItem;
    }

    public function name(UserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validated();
        $user->name = $validated['name'];
        $user->save();
        return $user;
    }

    public function password(UserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validated();
        $user->password = $validated['password'];
        $user->save();
        return $user;
    }

    public function email(UserRequest $request, string $id)
    {
        $user = User::findOrFail($id);
        $validated = $request->validated();
        $user->email = $validated['email'];
        $user->save();
        return $user;
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return $user;
    }
    
}
