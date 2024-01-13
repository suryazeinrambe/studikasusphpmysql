<?php

namespace View {

    use Helper\InputHelper;
    use Service\TodoListService;

    class TodoListView 
    {
        private TodoListService $todoListService;
        public function __construct(TodoListService $todoListService) {
            $this->todoListService = $todoListService;
        }
        function showTodoList(): void
        {
            while (true) {
                $this->todoListService->showTodoList();

                echo "MENU" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->addTodoList();
                } else if ($pilihan == "2") {
                    $this->removeTodoList();
                } else if ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilihan Tidak Dimengerti!" . PHP_EOL;
                }
            }
            echo "Sampai Jumpa Lagi ~^.^~" . PHP_EOL;
        }
        function addTodoList(): void 
        {
            echo "Menambah Todo " .PHP_EOL;

            $todo = InputHelper::input("x untuk batal");

            if($todo === "x" ){
                echo "Batal Menambahkan  Todo!" . PHP_EOL;
            } else {
                $this->todoListService->addTodoList($todo);
            }
        }
        function removeTodoList(): void 
        {
            echo "Menghapus Todo  " . PHP_EOL;

            $pilihan = InputHelper::input("Nomor  (x untuk batal)");
            if($pilihan == "x"){
                echo "Batal Menghapus Todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodoList($pilihan);

            }
        }
    }
}