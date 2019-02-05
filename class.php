<?php

include 'db.php';

class Info 
{
    function __construct($pdo){
        $this->con = $con;
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
        $values = ':'.implode(', :', array_keys($fields));
        $sql = "INSERT INTO {$table} ({$columns}) VALUES ({$values})";

        if($stmt = $this->con->prepare($sql)){
            foreach ($stmt as $key => $value) {
                $stmt->bindValue(':'.$key, $value);
            }
            $stmt->execute();
        }

    }
}


?>