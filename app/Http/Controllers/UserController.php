<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function index(): JsonResponse
    {
        $users = [
            [ "id" => 1, "name" => "Alice" ],
            [ "id" => 2, "name" => "Bob" ]
        ];

        return response()->json($users);
    }

    public function assets(int $id): JsonResponse
    {
        $assetsByUser = [
            1 => [
                [ "tokenId" => "T123", "assetName" => "Apartment A", "tokenCount" => 50 ],
                [ "tokenId" => "T456", "assetName" => "Shop B", "tokenCount" => 30 ]
            ],
            2 => [
                [ "tokenId" => "T789", "assetName" => "Office C", "tokenCount" => 100 ]
            ]
        ];

        $assets = $assetsByUser[$id] ?? [];

        if (empty($assets)) {
            return response()->json(['error' => 'User not found or has no assets.'], 404);
        }

        return response()->json($assets);

    }
}
