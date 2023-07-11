<?php

namespace App\DTO;

use Illuminate\Http\Request;

class AdminRequest
{

    public string $name;
    public string $email;
    public ?string $avatar;
    //public string $status;


    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? null ;
        $this->email = $data['email'] ?? null;
        $this->avatar = $data['avatar'] ?? null;
        //$this->status = $data['IsActive'] ?? null;
    }

    public function hasFile(Request $request, $key = null): bool
    {
        return $request->hasFile($key);
    }


}
