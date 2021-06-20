<?php

namespace App\Services;

use App\Models\Task;
use App\Services\BaseService;
use Illuminate\Support\Facades\Log;

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

    public function update($request, $id)
    {
        $task = Task::find($id);
        $task->name = $request->name;
        $task->completed = $request->completed;
        $task->save();

        return $task;
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return $task;
    }

    

}
