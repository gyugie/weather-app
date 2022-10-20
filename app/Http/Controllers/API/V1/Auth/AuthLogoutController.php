<?php

namespace App\Http\Controllers\API\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthLogoutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $revoke = $request->user()->token()->revoke();
        return response()->json([
            'status' => $revoke ? 'success' : 'error',
            'status_code' => $revoke ? 200 : 500,
            'message' => $revoke ? "berhasil keluar dari sistem" : "terjadi kesalahan teknis",
        ]);
    }
}
