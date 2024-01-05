<?php

require_once '../View/ViewAddTodoList.php';
require_once '../View/ViewShowTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList("Surya");
addTodoList("Zein");
addTodoList("Rambe");

viewAddTodoList();
//viewShowTodoList();

//showTodoList();
viewAddTodoList();
showTodoList();