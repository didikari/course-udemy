<?php
require_once "../model/TodoList.php";
require_once "../businesslogic/AddTodoList.php";

addTodoList("Didik");
addTodoList("Ari");
addTodoList("Yanto");

var_dump($todoList);

