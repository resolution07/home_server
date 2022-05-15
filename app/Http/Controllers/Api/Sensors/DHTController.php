<?php

namespace App\Http\Controllers\Api\Sensors;

use App\Http\Actions\Api\Sensors\DHTActions;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Sensors\DHTCreateRequest;
use App\Http\Requests\Api\Sensors\DHTReadRequest;
use Illuminate\Http\JsonResponse;

class DHTController extends Controller
{
    /**
     * @param DHTCreateRequest $request
     * @param DHTActions $dHTActions
     * 
     * @return JsonResponse
     */
    public function create(DHTCreateRequest $request, DHTActions $dHTActions): JsonResponse
    {
        $result = $dHTActions->create($request);
        return response()->json($result);
    }


    /**
     * @param DHTReadRequest $request
     * @param DHTActions $dHTActions
     * 
     * @return JsonResponse
     */
    public function read(DHTReadRequest $request, DHTActions $dHTActions): JsonResponse
    {
        return response()->json($dHTActions->read($request));
    }
}
