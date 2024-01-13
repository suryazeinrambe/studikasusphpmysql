<?php 

namespace Repository {

    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList $todoList):void;
        function remove(int $number): bool;
        function findAll(): array;
    }

    class TodoListRepositoryImpl implements TodoListRepository{
        public array $todoList = array();
        private \PDO $conn;

        public function __construct(\PDO $conn)
        {
            $this->conn = $conn;
        }

        function save(TodoList $todoList):void
        {
//            $number = sizeof($this->todoList) + 1;
//            $this->todoList[$number] = $todoList;

            $sql = "INSERT INTO todoList(todo) VALUES (?)";
            $result=$this->conn->prepare($sql);
            $result->execute([$todoList->getTodo()]);
        }
        
        function remove(int $number): bool
        {
//            if($number > sizeof($this->todoList))
//            {
//                return false;
//            }
//
//
//            for ($i = $number; $i < sizeof($this->todoList); $i++)
//            {
//                $this->todoList[$i] = $this->todoList[$i + 1];
//            }
//            unset($this->todoList[sizeof($this->todoList)]);
//
//            return true;
            $sql = "SELECT id  FROM todolist WHERE ID = ?";
            $result=$this->conn->prepare($sql);
            $result->execute([$number]);
            if ($result->fetch()){
                $sql = "DELETE FROM todolist WHERE ID = ?";
                $result=$this->conn->prepare($sql);
                $result->execute([$number]);
                return true;
            }else {
                return false;
            }

        }
    
        function findAll(): array
        {
//            return $this->todoList;
            $sql = "SELECT id , todo FROM todolist";
            $result = $this->conn->prepare($sql);
            $result->execute();

            $result = [];

            foreach ($result as $row) {
                $todolist = new TodoList();
                $todolist->setId($row['id']);
                $todolist->setTodo($row['todo']);

                $result[] = $todolist;
            }
            return $result;
        }

    }
}