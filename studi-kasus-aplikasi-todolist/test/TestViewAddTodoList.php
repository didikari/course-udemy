<?php
require_once "../view/viewAddTodoList.php";
require_once "../businesslogic/ShowTodoList.php";
require_once "../businesslogic/AddTodoList.php";

addTodoList("Didik");
addTodoList("Ari");
addTodoList("Yanto");
addTodoList("Nurul");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();


