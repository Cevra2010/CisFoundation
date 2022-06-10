<?php
namespace CisFoundation\AuthManager;

use Exception;

class AuthManager {

    public static $authMethods = null;

    public static function registerAuthMethod($authMethodSlug,$authMethodClass) {
        if(self::$authMethods == null) {
            self::$authMethods = collect();
        }

        self::$authMethods->add(new AuthMethod($authMethodSlug,$authMethodClass));
    }

    public static function authMethodExists($authMethodSlug) {
        foreach(self::$authMethods as $method) {
            if($method->slug == $authMethodSlug) {
                return true;
            }
        }
        return false;
    }

    public static function getAuth($authMethodSlug) {
        foreach(self::$authMethods->all() as $method) {
            if($method->slug == $authMethodSlug) {
                return $method->class;
            }
        }
        throw new Exception('Unable to initialize auth. Default auth method not found.');
    }

    public static function authSuccessfull() {
        return redirect()->route("home");
    }

}
