<?php

namespace App\Repositories;

use Bosnadev\Repositories\Eloquent\Repository;

class TaskRepository extends Repository
{
    public function model()
    {
        return 'App\Task';
    }
}