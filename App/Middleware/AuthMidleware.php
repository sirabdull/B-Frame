<?php

namespace App\Middleware;

use Bframe\HTTP\Middleware as HTTPMiddleware;
use Bframe\HTTP\Request;
use Bframe\HTTP\Response;
use App\Model\User;

/**
 * 
 * 
 */


class AuthMidleware extends HTTPMiddleware
{
    public static function handle(Request $request) {
        // Implement your logic to check if the user is logged in.
        // This is just a placeholder logic.
        $userLoggedIn = false; // Assume user is not logged in
    

        if (!$userLoggedIn) {
            // If the user is not logged in, return a JSON response and break the request flow
            return Response::json(User::all());
        }

        // If the user is logged in, return true to continue the request flow
        return true;
    }   
}