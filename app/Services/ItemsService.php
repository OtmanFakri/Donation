<?php

namespace App\Services;

use App\DTO\AdminRequest;
use App\Repositories\Imp\ImpRepositories;

use Illuminate\Http\Request;

class ItemsService
{
    protected $repository;

    public function __construct(ImpRepositories $repository)
    {
        $this->repository = $repository;
    }

    public function create(array $data):bool
    {
        return $this->repository->save($data);
    }

    public function getItemByid(int $id)
    {
        $item = $this->repository->findById(1);

        if ($item) {
            $item->load([
                'item',
                'item.itemImages'
            ]);
        }

        return $item;
    }

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function update(int $id, array $data): bool
    {
        $result = $this->repository->update($id, $data);
        return $result !== false;
    }

    public function delete(int $id): bool
    {
        try {
            $this->repository->delete($id);
            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

}
