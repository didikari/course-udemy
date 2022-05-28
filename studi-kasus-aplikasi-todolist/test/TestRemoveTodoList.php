<?php
require_once "../model/TodoList.php";
require_once "../businesslogic/RemoveTodoList.php";
require_once "../businesslogic/AddTodoList.php";
require_once "../businesslogic/ShowTodoList.php";


addTodoList("Didik");
addTodoList("Ari");
addTodoList("Yanto");
addTodoList("Nurul");
addTodoList("Aeni");


showTodoList();
removeTodoList(3);
showTodoList();
removeTodoList(2);
showTodoList();

$success = removeTodoList(4);
var_dump($success);

//var_dump($todoList);

