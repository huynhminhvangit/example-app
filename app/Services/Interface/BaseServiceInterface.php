<?php

namespace App\Services\Interface;

use Illuminate\Database\Eloquent\Collection;

interface BaseServiceInterface
{
    public function findAll();
    public function findById(int $id);
    public function create(array $data);
    public function update(int $id, array $data);
    public function delete(int $id);
    public function saveAll(Collection $collection);
}
