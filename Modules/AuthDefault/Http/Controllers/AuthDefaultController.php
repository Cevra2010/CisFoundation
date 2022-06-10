<?php

namespace Modules\AuthDefault\Http\Controllers;

use CisFoundation\AuthManager\AuthManager;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\AuthDefault\Http\Requests\SubmitLoginFormRequest;

class AuthDefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('authdefault::index');
    }

    public function submit(SubmitLoginFormRequest $request) {
        if(Auth::attempt(['username' => $request->get('username'),'password' => $request->get('password')])) {
            return AuthManager::authSuccessfull();
        }
        else {
            return redirect()->back()->withErrors([
                'Benutzername und/oder Passwort sind nicht korrekt.'
            ])->withInput();
        }
    }
}
