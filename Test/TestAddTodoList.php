<?php

require_once '../Model/TodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList("Surya");
addTodoList("Zein");
addTodoList("Rambe");

var_dump($todolist);