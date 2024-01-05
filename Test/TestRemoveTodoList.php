<?php 
require_once '../Model/TodoList.php';
require_once '../BusinessLogic/AddTodoList.php';
require_once '../BusinessLogic/RemoveTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';

addTodoList("Surya");
addTodoList("Zein");
addTodoList("Rambe");
addTodoList("Simanjuntak");

showTodoList();
//removeTodoList(3);
//showTodoList();
//removeTodoList(4);
//showTodoList();