<?php

namespace App\Traits;

trait APIResponse
{
    public function success($data, $status = 200,$message) {
        return [
            'data' => $data,
            'success' => in_array($status, [200, 201, 202]) ? true : false,
            'message' => $message? $message : null
        ];
    }

    public function failure($data, $status = 500,$message) {
        return [
            'error' => $data,
            'success' => false,
            'message' => $message? $message : null
        ];
    }
}