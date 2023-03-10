<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Base\BaseService;

class UserService extends BaseService
{
    public function __construct(UserRepository $repository)
    {
        parent::__construct($repository);
    }
    
}