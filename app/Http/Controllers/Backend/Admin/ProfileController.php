<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::get()->first();
        return view('backend.profile.index', compact('user'));
    }

    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('backend.profile.edit', compact('users'));
    }

    /**
     * Update the authenticated user's profile with the provided request data.
     **/
    public function update(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',


        ]);

        $user = User::get()->first();
        $user->name=$request->name;
        $user->age=$request->age;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->dob=$request->dob;
        $user->address=$request->address;
        $user->degree=$request->degree;
        $user->short_bio=$request->short_bio;
        $user->long_bio=$request->long_bio;
        $user->designations=$request->designations;
        $user->website_url=$request->website_url;
        $user->facebook=$request->facebook;
        $user->twitter=$request->twitter;
        $user->linkedin=$request->linkedin;
        $user->instagram=$request->instagram;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/users'), $imageName);
            $user->profile_image = $imageName;
        }

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('storage/images/users'), $imageName);
            $user->cover_image = $imageName;
        }
        $user->save();

        return redirect()->route('admin.profile.index')->with('success', 'Profile updated successfully.');
    }

    //update password
    public function updatePassword(Request $request){
        $password = User::get()->first();
        $request->validate([
            'email' => 'required|email',    
            'password' => 'required|confirmed|min:8',
        ]);
       
        $password->password = Hash::make($request->password);
        $password->update();       
        return redirect()->route('admin.profile.index')->with('success', 'Password updated successfully.');
    }
}
