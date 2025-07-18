<?php

namespace SiasnClient\JsonResponse;

class Error
{

    public static function getToken($getToken)
    {
        return [
            'status' => false,
            'message' => $getToken['message']
        ];
    }
    public static function http($http)
    {
        return [
            'status' => false,
            'message' => $http['message']
        ];
    }
}
