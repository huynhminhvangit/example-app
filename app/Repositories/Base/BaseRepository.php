<?php

namespace App\Repositories\Base;

use App\Repositories\Interface\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Find All Per Page
     * 
     * @return \Illuminate\Support\Collection $model
     */
    public function findAll()
    {
        return $this->model->all();
    }

    /**
     * Find By Id
     * 
     * @param $id
     * @return $model
     * @throws \Exception
     */
    public function findById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Create By Id
     * 
     * @param $data
     * @return $model
     * @throws \Exception
     */
    public function create(array $data)
    {
        $this->model->create($data);
    }

    /**
     * Update By Id
     * 
     * @param $id
     * @return $model
     * @throws \Exception
     */
    public function update($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    /**
     * Delete By Id
     * 
     * @param $id
     * @return bool
     * @throws \Exception
     */
    public function delete($id)
    {
        $record = $this->model->findOrFail($id);
        return $record->delete();
    }

    /**
     * Save All Model
     * 
     * @param \Illuminate\Support\Collection $collection
     * @return array $model
     * @throws \Exception
     */
    public function saveAll(Collection $collection)
    {
        $savedItems = collect([]);

        $collection->each(function ($item) use ($savedItems) {
            $savedItems->push($this->model->create($item));
        });

        return $savedItems;
    }

    
}