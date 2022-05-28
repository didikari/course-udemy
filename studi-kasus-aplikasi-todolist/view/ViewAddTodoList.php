<?php
require_once  __DIR__ ."/../model/Todolist.php";
require_once  __DIR__ ."/../helper/Input.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO".PHP_EOL;
    $todo = input("Todo (x untuk batal)");
    if ($todo == "x"){
        //batal
        echo "Batal menambah todo";
    }else{
        addTodoList($todo);
    }
}

