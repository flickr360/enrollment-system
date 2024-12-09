<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    // Method to show the profile page
    public function profile()
    {
        return view('profile'); // This will render the profile view
    }

    // Method to update the profile picture
    public function updateProfilePicture(Request $request)
    {
        // Validate the uploaded image
        $request->validate([
            'profile_picture' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // 2MB Max
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Handle the image upload
        if ($request->hasFile('profile_picture')) {
            // Delete the old profile picture if it exists
            if ($user->profile_picture && $user->profile_picture !== 'default-profile.png') {
                Storage::delete('public/' . $user->profile_picture);
            }

            // Store the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures', 'public');

            // Update the user's profile picture path
            $user->profile_picture = $path;
            $user->save();
        }

        // Redirect back to the profile page
        return redirect()->route('profile')->with('success', 'Profile picture updated successfully');
    }
}
