<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TodoService;

class TodoController extends Controller
{
    protected $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }
    public function index()
    {
        $allTodos = $this->todoService->getAllTodos();
        return view('welcome', ['allTodos' => $allTodos]);
    }
}
