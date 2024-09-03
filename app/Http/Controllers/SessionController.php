<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class SessionController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('guest', except: ['destroy'])
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(request(['email', 'password']))) {
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
