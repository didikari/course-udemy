<?php
require_once "../model/Todolist.php";
require_once "../view/ViewRemoveTodoList.php";
require_once "../businesslogic/AddTodoList.php";
require_once "../businesslogic/ShowTodoList.php";

addTodoList("Didik");
addTodoList("Ari");
addTodoList("Yanto");
addTodoList("Nurul");
addTodoList("Aeni");

showTodoList();

viewRemoveTodoList();

showTodoList();
