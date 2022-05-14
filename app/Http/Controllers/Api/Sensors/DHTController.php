<?php

namespace App\Http\Controllers\Api\Sensors;

use App\Http\Actions\Api\Sensors\DHTActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Sensors\DHTAddRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class DHTController extends Controller
{
    public function add(DHTAddRequest $request, DHTActions $dHTActions): JsonResponse
    {
        $result = $dHTActions->add($request);
        return response()->json($result);
    }
}
