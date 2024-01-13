<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../Config/Database.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;
function testShowTodoList() : void 
{
    $conn = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("BELAJAR PHP WEB");
    $todoListService->showTodoList();
//    $todoListRepository->todoList[1] = new TodoList("BELAJAR PHP DASAR");
//    $todoListRepository->todoList[1] = new TodoList("BELAJAR PHP OOP");
//    $todoListRepository->todoList[1] = new TodoList("BELAJAR PHP DATABASE");

}

function testAddTodoList() : void
{
    $conn = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("BELAJAR PHP DASAR");
    $todoListService->addTodoList("BELAJAR PHP OOP");
    $todoListService->addTodoList("BELAJAR PHP DATABASE");

    $todoListService->showTodoList();
}

function testRemoveTodoList() : void 
{
    $conn = \Config\Database::getConnection();
    $todoListRepository = new TodoListRepositoryImpl($conn);

    $todoListService = new TodoListServiceImpl($todoListRepository);
//    $todoListService->addTodoList("BELAJAR PHP DASAR");
//    $todoListService->addTodoList("BELAJAR PHP OOP");
//    $todoListService->addTodoList("BELAJAR PHP DATABASE");

//    $todoListService->showTodoList();
//    $todoListService->removeTodoList(1);
//    $todoListService->showTodoList();
//    $todoListService->removeTodoList(1);
//    $todoListService->showTodoList();
//
    echo $todoListService->removeTodoList(28) . PHP_EOL ;
    echo $todoListService->removeTodoList(29) . PHP_EOL;
//    echo $todoListService->removeTodoList(3) . PHP_EOL;
//    echo $todoListService->removeTodoList(2) . PHP_EOL;
//    echo $todoListService->removeTodoList(1) . PHP_EOL;


    $todoListService->showTodoList();
    

}



testShowTodoList();