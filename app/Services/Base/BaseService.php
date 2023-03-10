<?php

namespace App\Services\Base;

use App\Repositories\Base\BaseRepository;
use App\Services\Interface\BaseServiceInterface;
use Illuminate\Support\Collection;

abstract class BaseService implements BaseServiceInterface
{
    protected $repository;

    public function __construct(BaseRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function findById(int $id)
    {
        return $this->repository->findById($id);
    }

    public function create(array $data)
    {
        return $this->repository->create($data);
    }

    public function update(int $id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function delete(int $id)
    {
        return $this->repository->delete($id);
    }

    public function saveAll(Collection $collection)
    {
        return $this->repository->saveAll($collection);
    }
}