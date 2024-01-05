<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
function viewAddTodoList()
{
    echo "Menambah Todo " .PHP_EOL;

    $todo = input("x untuk batal");

    if($todo == "x"){
        echo "Batal Menambahkan  Todo!";
    } else {
        addTodoList($todo);
    }
}