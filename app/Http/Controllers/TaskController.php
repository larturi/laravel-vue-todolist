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

    public function panel()
    {
        dd("Hola");
    }

    public function index()
    {
        // Para postman, si pide token descomentar la linea de abajo y correr:
        // http://todolist-vue-laravel-server.test/api/tasks
        // return csrf_token(); 
        return $this->taskService->index();
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

