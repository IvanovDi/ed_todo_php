<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;

class TaskComposer
{
    public function compose(View $view)
    {
        $view->with('test', random_int(0, 3));
    }
}