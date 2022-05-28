<?php
require_once __DIR__."/../helper/Input.php";
require_once __DIR__."/../businesslogic/RemoveTodoList.php";
function viewRemoveTodoList()
{
    echo "Mengahapus TODO".PHP_EOL;
    $pilihan = input("Nomor (x untuk batal)");
    if($pilihan == "x"){
        echo "Batal menghapus todo".PHP_EOL;
    }else{
        $success = removeTodoList($pilihan);
        if($success){
            echo "Sukses mengahapus todo nomor $pilihan".PHP_EOL;
        }else{
            echo "Gagal menghapus todo nomor $pilihan".PHP_EOL;
        }
    }
}