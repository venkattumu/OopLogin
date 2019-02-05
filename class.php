<?php

include 'db.php';

class Info 
{
    function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function checkInput($input)
    {
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripcslashes($input);   

        return $input;        
    }

    public function insert($table, $feilds = array())
    {
        $columns = implode(',', array_keys($feilds));
        $values = ':'.implode(', :', array_keys($feilds));
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";

        if($stmt = $this->pdo->prepare($sql)){
            foreach ($feilds as $key => $data) {
                $stmt->bindValue(':'.$key, $data); 
            }
            $result  = $stmt->execute();
            return $this->pdo->lastInsertId();
        }

    }

    public function create($sql)
    {
        
    }
}
global $pdo;
$info = new Info($pdo);


?>