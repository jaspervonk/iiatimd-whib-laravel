<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ReallySimpleJWT\Token;


class UserController extends Controller
{
    public function index(){
        return ['users' => \App\Models\User::all()];
    }

    public function register($name, \App\Models\User $users){
        // Generate a JWT Token
        // Create token header as a JSON string
        $header = json_encode(['typ' => 'JWT', 'alg' => 'HS256']);

        // Generate Random String
        $length = 10;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        // Create token payload as a JSON string
        $payload = json_encode(['user_id' => $randomString]);

        // Encode Header to Base64Url String
        $base64UrlHeader = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($header));

        // Encode Payload to Base64Url String
        $base64UrlPayload = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($payload));

        // Create Signature Hash
        $signature = hash_hmac('sha256', $base64UrlHeader . "." . $base64UrlPayload, 'abC123!', true);

        // Encode Signature to Base64Url String
        $base64UrlSignature = str_replace(['+', '/', '='], ['-', '_', ''], base64_encode($signature));

        // Create JWT
        $jwt = $base64UrlHeader . "." . $base64UrlPayload . "." . $base64UrlSignature;

        // Create user and set id to JWT token and use the received name
        $users->token = $jwt;
        $users->name = $name;
        $users->save();

        // Give JWT Token back to the request
        return $jwt;
    }
}
