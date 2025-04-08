<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfilePasswordController extends Controller
{
    /**
     * Show the password change form.
     */
    public function edit(Request $request, string $id)
    {
        $user = User::findOrFail($id); // Find user by ID
        return view('backend.profile.password_change', compact('user')); // Return the view with the user data
    }

    /**
     * Handle the password update.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'current_password' => 'required', 
            'password' => 'required|confirmed|min:8', 
        ]);

        $user = User::findOrFail($id); // Find the user

        // Check if the provided current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'The provided password was incorrect.');
        }

        // Update the user's password with the new one
        $user->password = Hash::make($request->password);
        $user->save();

        // Redirect back with success message
        return redirect()->route('admin.profile.index')->with('success', 'Password updated successfully.');
    }
}
