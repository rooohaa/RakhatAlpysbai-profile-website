<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    public function index() {
        $users = User::all();

        return view('user.index')->with(['users' => $users]);
    }

    public function store(Request $request) {
        $imageName = $request->photo->getClientOriginalName();
        $request->photo->storeAs('images', $imageName, 'public');

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'photo' => $imageName,
        ]);

        return back();
    }
}
