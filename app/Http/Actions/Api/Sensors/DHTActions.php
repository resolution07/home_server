<?php

namespace App\Http\Actions\Api\Sensors;

use App\Http\Requests\Api\Sensors\DHTAddRequest;
use App\Models\Sensors\DHT;

class DHTActions
{
    public function add(DHTAddRequest $request)
    {
        $result = DHT::query()->create($request->validated());
        return $result;
    }
}
