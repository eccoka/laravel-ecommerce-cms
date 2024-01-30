<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class AdminController extends Controller
{
    public function adminDashboard(Request $request): Response
    {
        return Inertia::render('AdminDashboard', []);
    }

    public function showRegUserForm(Request $request): Response
    {
        $roles = DB::table('users')
                    ->select('role')
                    ->distinct()
                    ->get();

        return Inertia::render('AdminRegUserForm', ['roles' => $roles]);
    }

    public function storeUser(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'newsletter' => 0,
            'status' => 'active',
            'role' => $request->role,
        ]);

           event(new Registered($user));
//
//        Auth::login($user);

        // ide kell majd vmi message-es oldal
        return redirect()->intended('admin/dashboard');
    }

}
