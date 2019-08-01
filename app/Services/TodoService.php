<?php

namespace App\Services;

use App\Models\Todo;

class TodoService extends Services
{ 
    private $todoModel;

    public function __construct(Todo $todoModel){
        $this->todoModel = $todoModel;
    }

    public function getAllTodos(){
        return $this->todoModel->getAllTodos();
    }
}
