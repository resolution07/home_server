<?php

namespace App\Http\Actions\Api\Sensors;

use App\Http\Requests\Api\Sensors\DHTCreateRequest;
use App\Http\Requests\Api\Sensors\DHTReadRequest;
use App\Http\Resources\Api\Sensors\DHTReadCollection;
use App\Models\Sensors\DHT;
use Illuminate\Database\Eloquent\Model;

class DHTActions
{
    /**
     * @param DHTCreateRequest $request
     * 
     */
    public function create(DHTCreateRequest $request)
    {
        $result = DHT::query()->create($request->validated());
        return $result;
    }

    /**
     * @param DHTReadRequest $request
     * 
     */
    public function read(DHTReadRequest $request)
    {
        return new DHTReadCollection(
            DHT::query()
            ->orderByDesc('id')
            ->paginate(
                $request->getLimit(),
                $columns = ['*'],
                $pageName = 'page',
                $request->getPage()
            )
        );
    }
}
