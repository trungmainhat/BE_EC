<?php

namespace App\Http\Traits;

use Illuminate\Http\JsonResponse;

trait ApiResponse
{
    public function apiResponse($data = [], $status = null, $message = null, $code = 200): JsonResponse
    {
        $json = [
            'status' => $status,
            'message' => $message,
        ];

        if (!empty($data)) {
            $json['data'] = $data;
        }

        return response()->json($json, $code);
    }


    public function errorResponse($message = 'Something went wrong. Please try again', $code = 200)
    {
        return response()->json([
            'status' => false,
            'message' => $message,
        ], $code);
    }
}
