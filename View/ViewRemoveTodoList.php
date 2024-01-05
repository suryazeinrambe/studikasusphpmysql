<?php
require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';
function viewRemoveTodoList()
{
    echo "Menghapus Todo  " . PHP_EOL;

    $pilihan = input("Nomor  (x untuk batal)");
    if($pilihan == "x"){
        echo "Batal Menghapus Todo";
    } else {
        $succes = removeTodoList($pilihan);

        if ($succes){
            echo "Sukses Menghapus Todo nomor $pilihan " . PHP_EOL;
        }else {
            echo "Gagal Menambah Todo Nomor $pilihan" . PHP_EOL;
        }
    }

}