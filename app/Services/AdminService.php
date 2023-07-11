<?php

namespace App\Services;

use App\DTO\AdminRequest;
use App\Repositories\Imp\ImpRepositories;

use Illuminate\Http\Request;

class AdminService
{
    protected $repository;

    public function __construct(ImpRepositories $repository)
    {
        $this->repository = $repository;
    }

    public function addUser(AdminRequest $data):bool
    {
        $request = new Request();
        if($data->hasFile($request, 'avatar') ){
            $avatar = $data->name;
            $avatarName = $data->name.'.'.$avatar->getClientOriginalExtension();
            $avatarPath = 'images/avatar';
            $avatar->move($avatarPath, $avatarName);
            return $this->repository->save([
                'name' => $data->name,
                'email' => $data->email,
                'password' => '2345678wer',
                'avatar' => $avatarPath . $avatarName, // Save the avatar path
            ]);
        }
        return $this->repository->save([
            'name'=>$data->name,
            'email'=>$data->email,
            'password'=>'2345678wer',
        ]);

    }

    public function showUser(int $id)
    {
        return $this->repository->findById($id);
    }
    public function findAll()
    {
        return $this->repository->findAll();
    }
}
