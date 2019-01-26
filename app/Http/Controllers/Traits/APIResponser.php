<?php

/**
 * Created by PhpStorm.
 * User: myathtut
 * Date: 6/26/18
 * Time: 1:15 PM
 */

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Response;

trait APIResponser {

    public function respondCollection($message, $data) {
        return response()->json([
                    'code' => Response::HTTP_OK,
                    'message' => $message,
                    'data' => $data,
                        ], Response::HTTP_OK);
    }

    protected function respondPermissionDenied() {
        return response()->json([
                    'code' => 403,
                    'message' => 'Permission denied',
                        ], 403);
    }

    protected function exceptionResponse($msg, $code,$responseCode = 200) {
        $result = [
            'code' => $code,
            'message' => $msg,
        ];

        return response()->json($result, $responseCode);
    }


    protected function errorResponse($msg) {
        $result = [
            'code' => 426,
            'message' => $msg,
        ];

        return response()->json($result, 426);
    }


    public function respondSuccessMsgOnly($message) {
        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => $message,
        ], 200);
    }






}
