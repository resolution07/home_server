<?php

namespace App\Http\Actions\Api\Sensors;

use App\Http\Requests\Api\Sensors\DHTCreateRequest;
use App\Http\Requests\Api\Sensors\DHTReadRequest;
use App\Models\Sensors\DHT;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class DHTActions
{
    /**
     * @param DHTCreateRequest $request
     * 
     * @return [type]
     */
    public function create(DHTCreateRequest $request): Model
    {
        $result = DHT::query()->create($request->validated());
        return $result;
    }

    /**
     * @param DHTReadRequest $request
     * 
     * @return [type]
     */
    public function read(DHTReadRequest $request): LengthAwarePaginator
    {
        return DHT::query()->paginate(
            $request->getLimit(),
            $columns = ['*'],
            $pageName = 'page',
            $request->getPage()
        );
    }
}
