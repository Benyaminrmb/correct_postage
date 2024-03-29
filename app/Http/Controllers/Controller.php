<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generateResponse(
        $result,
        bool $success = true,
        $message = null,
        int $status_code = 200
    ): JsonResponse
    {
        $response = [
            'success' => $success,
            'data' => $result,
        ];

        if ($message) {
            $response['message'] = $message;
        }


        return response()->json($response, $status_code);
    }
}
