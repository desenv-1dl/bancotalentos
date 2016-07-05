<?php
/**
 * Created by PhpStorm.
 * User: marcio
 * Date: 11/11/2015
 * Time: 09:53
 */

namespace Sip\OAuth;

use Auth;


class Verifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email'    => $username,
            'password' => $password,
        ];

        if (Auth::once($credentials)) {
            return Auth::user()->id;
        }

        return false;
    }
}