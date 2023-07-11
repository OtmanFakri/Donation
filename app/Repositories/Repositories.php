<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class Repositories {
    protected $model;

    public function __construct(Model $model) {
        $this->model = $model;
    }

    public function findById(int $id) {
        return $this->model->find($id);
    }

    public function findAll() {
        return $this->model->all();
    }

    public function save(array $data): bool
    {
        try {
            $this->model->create($data);
            return true;
        } catch (\Exception $e) {
            // Handle any exceptions or errors that occur during the saving process
            return false;
        }
    }

    public function update(int $id, array $data) {
        $entity = $this->findById($id);
        if ($entity) {
            $entity->update($data);
            return $entity;
        }
        return null;
    }

    public function delete(int $id)
    {
        $entity = $this->findById($id);
        if ($entity) {
            $entity->delete();
        }
    }
}


