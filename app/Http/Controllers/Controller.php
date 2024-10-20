<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class Controller
{
    protected function successResponse($data, $message = '', $code = Response::HTTP_OK): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    protected function errorResponse($message, $code = Response::HTTP_BAD_REQUEST): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => $message
        ], $code);
    }

    protected function validateRequest($request, array $rules)
    {
        return Validator::make($request->all(), $rules)->validate();
    }

    protected function checkAuthenticated()
    {
        if (!Auth::check()) {
            return $this->errorResponse('Unauthorized', Response::HTTP_UNAUTHORIZED);
        }
    }

    protected function handleNotFound(ModelNotFoundException $e): JsonResponse
    {
        return $this->errorResponse('Resource not found', Response::HTTP_NOT_FOUND);
    }
}
