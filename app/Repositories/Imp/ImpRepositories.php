<?php

namespace App\Repositories\Imp;

use App\Repositories\Repositories;
use App\Models\User;

class ImpRepositories extends Repositories
{
    public function __construct(String $modelClass)
    {
        // Resolve the model class from the container
        $modelInstance = app($modelClass);

        // Pass the resolved model instance to the parent constructor
        parent::__construct($modelInstance);
    }
}
