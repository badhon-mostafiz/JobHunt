<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile', compact('user'));
    }

    public function addSkillset(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->skillsets()->attach($request->skillset_id);
        return redirect()->route('user.profile.show', $user->id);
    }

    public function updatePaymentOption(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'payment_option' => $request->payment_option,
        ]);
        return redirect()->route('user.profile.show', $user->id);
    }

    public function purchaseCourse(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->courses()->attach($request->course_id);
        return redirect()->route('user.profile.show', $user->id);
    }
}