<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\AuthLoginRequest;
use Illuminate\Http\Request;

class AuthLoginController extends Controller
{
    public function __invoke(AuthLoginRequest $request): \Illuminate\Http\JsonResponse
    {
        $validate = $request->validated();

        try {
            if (!auth()->attempt([
                'email' => $validate['email'],
                'password' => $validate['password'],
            ])) {
                throw new \Exception('Invalid Credentials', 400);
            }

            $access_token = \request()->user()->createToken( $validate['email'] )->plainTextToken;

            return response()->json([
                'status' => 'success',
                'status_code' => 200,
                'access_token' => $access_token,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'status_code' => $e->getCode(),
                'message' => $e->getMessage(),
            ]);
        }
    }
}
