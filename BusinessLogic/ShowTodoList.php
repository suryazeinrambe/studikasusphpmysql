<?php

//Menampilkan Todo di List
function showTodoList()
{
    global $todolist;    
    
    echo "TODOLIST" . PHP_EOL;
    foreach ($todolist as $number => $value)
    {
        echo "$number. $value" . PHP_EOL;
    }
}