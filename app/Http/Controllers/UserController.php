<?php
namespace App\Http\Controllers;

class UserController extends Controller {
    public function edit (\App\Models\User $user) {
        $user->load('foos', 'foo_bars');
        return response()->view('welcome', compact('user'));
    }
}
