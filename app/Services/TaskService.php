<?php

namespace App\Services;

use App\Services\BaseService;
use App\Models\Task;

class TaskService extends BaseService
{

    public function __construct() {}
    
    public function index()
    {
       return Task::orderBy('created_at', 'desc')->get();
    }

    public function store($request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->completed = false;
        $task->save();

        return $task;
    }

}
