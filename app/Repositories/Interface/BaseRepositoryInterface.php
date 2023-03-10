<?php

namespace App\Repositories\Interface;

use Illuminate\Database\Eloquent\Collection;

interface BaseRepositoryInterface
{
    public function findById(int $id);
    public function findAll();
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function saveAll(Collection $collection);
}