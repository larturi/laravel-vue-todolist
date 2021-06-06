<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{

    protected $taskService;

    public function __construct(
        TaskService $taskService
    ) {
        $this->taskService = $taskService;
    }

    public function index()
    {
        return $this->taskService->index();
    }

    public function store(Request $request)
    {
        return $this->taskService->store($request);
    }

}

