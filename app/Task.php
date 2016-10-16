<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Collective\Html\Eloquent\FormAccessible;

class Task extends Model
{
    use SoftDeletes;
    use FormAccessible;

    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
