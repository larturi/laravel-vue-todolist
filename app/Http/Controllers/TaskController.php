<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\TaskService;
class TaskController extends Controller
{
    protected $taskService;

    public function __construct(
        TaskService $taskService
    ) {
        $this->taskService = $taskService;
    }

    public function index(Request $request)
    {
        return $this->taskService->index($request);
    }

    public function store(Request $request)
    {
        return $this->taskService->store($request);
    }

    public function update(Request $request, $id)
    {
        return $this->taskService->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->taskService->destroy($id);
    }

}

