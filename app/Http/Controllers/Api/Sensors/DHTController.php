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
     */
    public function create(DHTCreateRequest $request, DHTActions $dHTActions)
    {
        $result = $dHTActions->create($request);
        return $result;
    }


    /**
     * @param DHTReadRequest $request
     * @param DHTActions $dHTActions
     * 
     */
    public function read(DHTReadRequest $request, DHTActions $dHTActions)
    {
        return $dHTActions->read($request);
    }
}
