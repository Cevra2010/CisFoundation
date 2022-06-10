<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use CisFoundation\AuthManager\AuthManager;
use CisFoundation\SettingsManager\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function auth() {
        $defaultAuthMethod = Setting::get('auth.default_method');

        /* Check the auth method is registered */
        if(!AuthManager::authMethodExists($defaultAuthMethod)) {
            return redirect()->route("auth.choose");
        }

        $authMethodClass = AuthManager::getAuth($defaultAuthMethod);
        $instance = new $authMethodClass();
        return $instance->index();
    }

    public function chooseAuthMethod() {
        return "Bitte wählen Sie eine Authentifizierungsmethode...";
    }

    public function signOut() {
        Auth::logout();
        return redirect()->route("home");
    }
}
