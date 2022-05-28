<?php
require_once "../view/ViewShowTodoList.php";
require_once "../businesslogic/AddTodoList.php";

addTodoList("Didik");
addTodoList("Ari");
addTodoList("Yanto");
addTodoList("Nurul");

viewShowTodoList();