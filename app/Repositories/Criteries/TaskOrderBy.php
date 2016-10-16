<?php

namespace App\Repositories\Criteries;

use Bosnadev\Repositories\Criteria\Criteria;
use Bosnadev\Repositories\Contracts\RepositoryInterface as Repository;

class TaskOrderBy extends Criteria
{
    public function apply($model, Repository $repository)
    {
        return $model->orderBy('created_at', 'DESC');
    }
}
