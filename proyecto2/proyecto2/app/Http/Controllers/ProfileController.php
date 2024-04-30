<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Pet;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();
        $user->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $user->save();

        // Obtener el valor de user_type del request
        $userType = $request->input('user_type');

        // Si el usuario es normal, guardar información de mascota
        if ($userType === 'normal') {
            $petData = [
                'type' => $request->input('pet_type'),
                'name' => $request->input('pet_name'),
                'age' => $request->input('pet_age'),
                'sex' => $request->input('pet_sex'),
            ];

            // Asociar la mascota con el usuario
            $user->pet()->updateOrCreate([], $petData);
        } else {
            // Si el usuario es veterinario, asegúrate de eliminar cualquier registro de mascota asociado
            $user->pet()->delete();
        }

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
