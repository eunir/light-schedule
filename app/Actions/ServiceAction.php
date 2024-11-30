<?php

namespace App\Actions;

use App\Models\Service;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ServiceAction
{
    /**
     * @param Service $service
     */
    public function __construct(protected Service $service){}

    /**
     * @param $id
     * @return Service|Collection|Model|null
     */
    public function find($id): Model|Collection|Service|null
    {
        return $this->service->query()->find($id);
    }

    /**
     * @return LengthAwarePaginator
     */
    public function index(): LengthAwarePaginator
    {
        return $this->service->query()->paginate(6);
    }

    /**
     * @param array $attributes
     * @return Model|Builder
     */
    public function create(array $attributes): Model|Builder
    {
        return $this->service->query()->create($attributes);
    }

    /**
     * @param int $id
     * @param array $attributes
     * @return void
     */
    public function update(int $id, array $attributes): void
    {
       $this->service->query()->where('id', $id)->update($attributes);
    }


    /**
     * @param int $serviceId
     * @return mixed
     */
    public function delete(int $serviceId): mixed
    {
        return $this->service->query()->where('id', $serviceId)->delete();
    }
}
